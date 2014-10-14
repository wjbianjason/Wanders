<h1 class="register-heading"><a href="<?php echo Yii::app()->homeUrl; ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/logo.jpg"></a></h1>
<div class="spilt"></div>
<div class="wrapper">
    <h1 class="title-wrapper choose-account">
        注册账户
    </h1>
</div>

<div class="full-block choose-account-fullblock">
    <div class="wrapper choose-account-wrapper">
        <div class="dynamic-row">

            <div class="box service-pro-account">
                <h2>
                    我想提供服务需求
                </h2>
                <p class="account-description">
                    被雇佣并提供给客户服务
                </p>
                <a class="btn btn-lg btn-primary btn-block" href="<?php echo Yii::app()->createUrl('user/default/wiker'); ?>">
                    注册
                </a>
            </div>


            <div class="box standard-account">
                <h2>
                    我想雇请专业人士
                </h2>
                <p class="account-description">
                    为您的项目提供专业指导
                </p>
                <a class="btn btn-lg btn-primary btn-block" href="<?php echo Yii::app()->createUrl('user/default/hirer'); ?>">
                    注册
                </a>
            </div>

        </div>
    </div>
</div>

<div class="wrapper">
    <div class="bottom-link-wrapper">
        您已注册
        <a href="<?php echo Yii::app()->createUrl('user/default/login'); ?>">
            登录
        </a>
    </div>
</div>

