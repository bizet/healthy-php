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
        <label for="span-height">身高:</label>
        <span id="span-height" ></span>
      </li>
      <li>
        <label for="span-weight">体重:</label>
        <span id="span-weight" ></span>
      </li>
      <li>
        <label for="span-bmi">BMI:</label>
        <span id="span-bmi" ></span>
      </li>
      <li>
        <label for="span-disease">disease history</label>
        <span id="span-disease" ></span>
      </li>
      
      <li>
        <button class="btn btn-primary pull-right" id="reg_submit">更新账户信息</button>
      </li>

    </div>
  </div>
</div>