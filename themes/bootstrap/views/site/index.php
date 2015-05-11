<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-5">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <?php
                    $src = Yii::app()->request->baseUrl;
                    $src .= '/images/carousels/1.jpg';
                    echo CHtml::image($src);
                    ?>
                </div>
                <div class="item">
                    <?php
                    $src = Yii::app()->request->baseUrl;
                    $src .= '/images/carousels/2.jpg';
                    echo CHtml::image($src);
                    ?>
                </div>
                <div class="item">
                    <?php
                    $src = Yii::app()->request->baseUrl;
                    $src .= '/images/carousels/3.jpg';
                    echo CHtml::image($src);
                    ?>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="col-xs-12 col-md-7">
        <div class="media">
            <div class="media-left">
                <a href="#">
                    <?php
                    $src = Yii::app()->request->baseUrl;
                    $src .= '/images/carousels/1.jpg';
                    $htmlOptions = array(
                        'class'=>'media-object img-circle',
                        'style'=>'width: 140px;'
                    );
                    echo CHtml::image($src, '', $htmlOptions);
                    ?>
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">4 Minute</h4>
                Album: Crazy
                <p>Tracks: </p>
                <p class="small">
                    01 미쳐, 02 1절만 하시죠, 03 간지럽혀, 04 눈에 띄네 (Feat. 매니저),
                    05 Show Me, 06 추운 비
                </p>
                <a href="#">View</a>
            </div>
        </div>
        <div class="media">
            <div class="media-left">
                <a href="#">
                    <?php
                    $src = Yii::app()->request->baseUrl;
                    $src .= '/images/carousels/2.jpg';
                    $htmlOptions = array(
                        'class'=>'media-object img-circle',
                        'style'=>'width: 140px;'
                    );
                    echo CHtml::image($src, '', $htmlOptions);
                    ?>
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">AOA</h4>
                Album: Like A Cat
                <p>Tracks: </p>
                <p class="small">
                    01. AOA, 02. 사뿐사뿐, 03. 여자사용법, 04. 단둘이, 05. Time,
                    06. 휠릴리
                </p>
                <a href="#">View</a>
            </div>
        </div>
        <div class="media">
            <div class="media-left">
                <a href="#">
                    <?php
                    $src = Yii::app()->request->baseUrl;
                    $src .= '/images/carousels/3.jpg';
                    $htmlOptions = array(
                        'class'=>'media-object img-circle',
                        'style'=>'width: 140px;'
                    );
                    echo CHtml::image($src, '', $htmlOptions);
                    ?>
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">APink</h4>
                Album: LUV
                <p>Tracks: </p>
                <p class="small">
                    01. LUV, 02. Wanna Be, 03. Secret, 04. 천사가 아냐, 
                    05. 동화 같은 사랑, 06. LUV (Inst.)
                </p>
                <a href="#">View</a>
            </div>
        </div>
    </div>
</div>