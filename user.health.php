<style>
  #panel-health-info {
    width: 58%;
  }
  #panel-health-info li {
    list-style: none;
    margin: .5em auto;
  }
  #panel-health-info label,
  #panel-health-info span {
    font-size: .9em;
  }
  #panel-health-info label {
    width: 30%;
    vertical-align: top;
  }
  #panel-health-info span,
  #panel-health-info #span-disease {
    width: 60%;
  }
  #panel-health-info #span-disease {
    display: inline-block;
  }
  #panel-health-info #span-disease > span {
    margin: 0 .2em;
  }

  #panel-health-info button {
    width: 70%;
    margin: .8em auto;
  }

  #modal-update-health li {
    list-style: none;
    width: 80%;
    margin: .5em auto;
  }
  #modal-update-health li > label {
    display: inline-block;
    width: 25%;
    vertical-align: top;
  }
  #modal-update-health li > input
  {
    display: inline-block;
    width: 50%;
  }
  #modal-update-health li > div
  {
    display: inline-block;
    width: 70%;
  }
  #disease-checkbox-list > li {
    list-style: none;
    width: 100%;
  }
  #disease-checkbox-list > li > label,
  #disease-checkbox-list > li > input,
  #disease-checkbox-list > li > div
  {
    display: inline-block;
  }
  #disease-checkbox-list > li > div {
    width: 30%;
  }

  #disease-checkbox-list > li > label {
    width: 25%;
    height: 2.5em;
    line-height: 2.5em;
  }
  #disease-checkbox-list > li > input {
    height: 2.5em;
    width: 40%;
  }

</style>
<div class="panel panel-primary" id="panel-health-info">
  <div class="panel-heading">健康信息</div>
  <div class="panel-body">
    <div class="tab-pane clearfix" id="health-info">
      <li>
        <label for="span-height">身高:</label>
        <span id="span-height" ></span> 厘米
      </li>
      <li>
        <label for="span-weight">体重:</label>
        <span id="span-weight" ></span> 公斤
      </li>
      <li>
        <label for="span-bmi">BMI:</label>
        <span id="span-bmi" ></span>
      </li>
      <li>
        <label for="span-disease">疾病史</label>
        <div id="span-disease" ></div>
      </li>
      
      <?php
        if ($user_id == $_SESSION['user']['id']) {
      ?>
      <li>
        <button class="btn btn-primary pull-right" id="btn-update-health">更新账户信息</button>
      </li>
      <?php
        }
      ?>

    </div>
  </div>
</div>


<div class="modal fade" id="modal-update-health">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">更新健康信息</h4>
      </div>
      <div class="modal-body">
        <form>
          <li>
            <label>身高: </label>
            <input class="form-control" placeholder="请输入测试日期时间" id="input-height" name="input-height">
            厘米
          </li>
          <li>
            <label>体重: </label>
            <input class="form-control" placeholder="请输入数字" id="input-weight" name="input-weight">
            公斤
          </li>
          <li>
            <label>疾病史: </label>
            <div id="disease-checkbox-list"></div>
            <!--input class="form-control" placeholder="" id="input-disease" name="input-disease"-->
          </li>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary" id="submit-update-health">保存</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
