<?php
class ItemsHelper extends AppHelper {
	var $helpers = array(
		'Html', 
		'UploadPack.Upload'
	);
	
	/*
	* 
	* <div class="serviceColLeft" >
		<?php echo $this->Html->image('ico_serv1.jpg', array('alt' => 'Service1'))?><h2>Service 1</h2>
		<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		<h3>Related projects</h3>
		<ul>
			<li><a href="#">Project name</a></li>
			<li><a href="#">Project name</a></li>
			<li><a href="#">Project name</a></li>
		</ul>
	</div>
	*/
	function listing($items) {
		$i = 0;
		$output = '';
		foreach ($items as $item){
			$class = null;
			if (isset($item['Item'])) {
				$item = array_merge($item['Item'], $item);
				unset($item['Item']);
			}
			if ($i++ % 2 == 0) {
				$class = 'serviceColLeft';
			} else {
				$class = 'serviceColRight';
			}
			$output .= '<div class="' . $class . '">'
				. $this->image($item) . '<h2>'
				. $this->Html->link($item['name'], 
					array('controller' => 'items', 'action' => 'view', $item['id'], Inflector::slug($item['name']))) . '</h2>';
			$output .= '<p class="clearfix">' . $item['description'] . '</p><h3>Details</h3><ul>';
			if ($item['price']) {
				$output .= '<li><b>Price:</b> $' . $item['price'] . '</li>';
			} else {
				$output .= '<li><b>Price:</b> Price to be Negotiated</li>';
			}
			if (isset($item['Category'])) {
				$output .= '<li><b>Category:</b> ' . $this->Html->link($item['Category']['name'], 
				array('controller' => 'categories', 'action' => 'view', $item['Category']['id'], Inflector::slug($item['Category']['name']))) . '</li>';	
			}
			if (!empty($item['make'])) {
				$output .= '<li><b>Make:</b> ' . $item['make'] . '</li>';	
			}
			if (!empty($item['model_number'])) {
				$output .= '<li><b>Model Number:</b> ' . $item['model_number'] . '</li>';	
			}
			$output .= '</ul></div>';
		}
		
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