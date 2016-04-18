<?php if (!defined('THINK_PATH')) exit(); if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
		<td><?php echo ($val["id"]); ?></td>
		<td><?php echo ($val["user"]); ?></td>
		<td><?php echo ($val["passwd"]); ?></td>
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>