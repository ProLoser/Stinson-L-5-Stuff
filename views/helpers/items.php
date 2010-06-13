<?php
class ItemsHelper extends AppHelper {
	var $helpers = array(
		'Html', 
		'UploadPack.Upload'
	);
	
	function listing($items) {
		$output = '<ul class="items">';
		$i = 0;
		foreach ($items as $item){
			$class = null;
			if (isset($item['Item'])) {
				$item = array_merge($item['Item'], $item);
				unset($item['Item']);
			}
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
			$output .= '<li' . $class . '>' . $this->inquire($item['id'])
				. '<h4>' . $this->Html->link($item['name'], 
				array('controller' => 'items', 'action' => 'view', $item['id'], Inflector::slug($item['name'])))
				. '</h4>' . $this->image($item);
			if (isset($item['Category'])) {
				$output .= '<p class="category">' . $this->Html->link($item['Category']['name'], 
					array('controller' => 'categories', 'action' => 'view', $item['Category']['id'], Inflector::slug($item['Category']['name']))) . '</p>';
			}
			$output .= '<p class="price">';
			$output .= (!$item['price']) ? $item['price'] : 'Price to be Negotiated';
			$output .= '</p><p>' . $item['description'] . '</p></li>';
		}
		$output .= '</ul>';
		
		return $output;
	}
	
	function inquire($itemId) {
		return $this->Html->link('Inquire', array('controller' => 'emails', 'action' => 'index', $itemId), array('class' => 'inquire'));
	}
	

	function image($row, $full = true) {
		$result = $this->Upload->image($row, 'Item.picture', 'thumb');
		if ($full) {
			$result = $this->Html->link($result, $this->Upload->url($row, 'Item.picture', 'original', false), array('class' => 'js-litebox', 'escape' => false));
		}
		return $result;
	}
}
?>