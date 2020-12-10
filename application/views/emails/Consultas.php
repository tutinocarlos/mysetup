<div style="background: #f6f6f6; font-family: sans; padding: 20px 40px; max-width: 700px;">


  <div style="padding: 5px; margin: 0;"></div>

  <div style="margin: 0; background-color: #3f5aa8; padding: 5px 10px; border-bottom: 1px #f3f3f3 solid; color: #FFF; font-weight: bold;">
    <p><?php echo $subject; ?></p>
  </div><div style="background: #FFF; margin: 0; padding: 10px;">
    <?php foreach($datos as $key => $val ): ?>
    <p><strong><?php echo strtoupper($key);?> : </strong><?php echo $val;?></p>
    <?php endforeach; ?>
  </div>
</div>