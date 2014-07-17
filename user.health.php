<style>
  #panel-health-info {
    width: 58%;
  }
  #panel-health-info li {
    list-style: none;
    margin: .5em auto;
  }
  #panel-health-info label,
  #panel-health-info span,
  #panel-health-info textarea,
  #panel-health-info input {
    font-size: .9em;
  }
  #panel-health-info label {
    width: 30%;
    vertical-align: top;
  }
  #panel-health-info span,
  #panel-health-info textarea,
  #panel-health-info input {
    width: 60%;
  }
  #panel-health-info textarea,
  #panel-health-info input {
    border: none;
  }
  #panel-health-info button {
    width: 70%;
    margin: .8em auto;
  }
</style>
<div class="panel panel-primary" id="panel-health-info">
  <div class="panel-heading">健康信息</div>
  <div class="panel-body">
    <div class="tab-pane clearfix" id="health-info">
      <li>
        <label for="reg_input_username">身高:</label>
        <span id="reg_input_username" ><?php echo $_SESSION['user']['height']?></span>
      </li>
      <li>
        <label for="reg_input_real_name">体重:</label>
        <span id="reg_input_username" ><?php echo $_SESSION['user']['weight']?></span>
      </li>
      <li>
        <label for="reg_input_sex">BMI:</label>
        <span id="reg_input_username" >
          <?php 
            $w = (float)$_SESSION['user']['weight'];
            $h = (float)$_SESSION['user']['height'] / 100;
            echo $h ? $w/($h*$h) : 0; 
          ?>
        </span>
      </li>
      <li>
        <label for="reg_input_cell">手机:</label>
        <span id="reg_input_username" ><?php echo $_SESSION['user']['username']?></span>
      </li>
      
      <li>
        <button class="btn btn-primary pull-right" id="reg_submit">更新账户信息</button>
      </li>

    </div>
  </div>
</div>