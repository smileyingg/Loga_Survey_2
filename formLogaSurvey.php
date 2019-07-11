<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
<style>
    .h-form .form-body .h-form-label {
        height: auto !important;

    }
</style>

<body>
    <div class="main-wrapper" id="main-wrapper">
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
            </div>
        </div>
        <?php include 'header.php'; ?>
        <div class="container-fluid">
            <div class="col s12 m-t-40">

                <div class="card">
                    <div class="row">
                        <div class="col s12 l6">
                            <div class="card-content">

                                <h5>แบบสอบถามความพึงพอใจในการสัมมนาทำร้านเล็บยังไงให้ปังในยุค 4.0 #2</h5>
                                <h5>วันที่ 23 กรกฏาคม พ.ศ.2562 </h5>
                                <h6>( 5=มากที่สุด / 4=มาก / 3=ปานกลาง / 2=น้อย / 1=น้อยที่สุด ) </h6>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <form class="h-form b-form striped-rows" id="SURVEY" method="POST" action="">
                        <div class="form-body">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label" style="">
                                            <label for="icon_prefix "></label>
                                        </div>
                                    </div>
                                    <div class="col s4">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label for="icon_prefix" style="">เนื้อหา</label>
                                        </div>
                                    </div>
                                    <div class="col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label for="icon_prefix">5</label>
                                        </div>
                                    </div>
                                    <div class="col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label for="icon_prefix">4</label>
                                        </div>
                                    </div>
                                    <div class="col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label for="icon_prefix">3</label>
                                        </div>
                                    </div>
                                    <div class="col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label for="icon_prefix">2</label>
                                        </div>
                                    </div>
                                    <div class="col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label for="icon_prefix">1</label>
                                        </div>
                                    </div>
                                    <div class="col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label for="icon_prefix"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <div class="h-form-label" style="">
                                            <label for="icon_prefix ">
                                                <h6>1. ด้านเนื้อหา/หลักสูตร</h6>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- in herr 1.1 -->

                                <div class="row">
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                        </div>
                                    </div>
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                            <label for="">1.1</label>
                                        </div>
                                    </div>
                                    <div class="col s4">
                                        <div class="h-form-label m-t-10">
                                            <label id="">เนื้อหาที่บรรยายแต่ละหัวข้อเป็นประโยชน์โดยตรงต่อธุรกิจ</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q11" type="radio" value="5" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q11" type="radio" value="4" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q11" type="radio" value="3" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q11" type="radio" value="2" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q11" type="radio" value="1" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- 1.2 -->
                                <div class="row">
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                        </div>
                                    </div>
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                            <label for="">1.2</label>
                                        </div>
                                    </div>
                                    <div class="col s4">
                                        <div class="h-form-label m-t-10">
                                            <label id="">ได้ความรู้ และมีความเข้าใจเพิ่มขึ้นหลังจากเข้าร่วม</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q12" type="radio" value="5" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q12" type="radio" value="4" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q12" type="radio" value="3" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q12" type="radio" value="2" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q12" type="radio" value="1" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider"></div><br>
                                <div class="row">
                                    <div class="col s12">
                                        <div class="h-form-label" style="">
                                            <label for="icon_prefix ">
                                                <h6>2. ด้านกระบวนการถ่ายทอดความรู้</h6>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- 2.1 -->
                                <div class="row">
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                        </div>
                                    </div>
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                            <label for="">2.1</label>
                                        </div>
                                    </div>
                                    <div class="col s4">
                                        <div class="h-form-label m-t-10">
                                            <label id="">มีการถ่ายทอดได้ตรงกับหัวข้อสัมมนา และอย่างครบถ้วน</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q21" type="radio" value="5" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q21" type="radio" value="4" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q21" type="radio" value="3" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q21" type="radio" value="2" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q21" type="radio" value="1" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- 2.2 -->
                                <div class="row">
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                        </div>
                                    </div>
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                            <label for="">2.2</label>
                                        </div>
                                    </div>
                                    <div class="col s4">
                                        <div class="h-form-label m-t-10">
                                            <label id="">มีการถ่ายทอดได้อย่างชัดเจน เข้าใจง่าย</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q22" type="radio" value="5" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q22" type="radio" value="4" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q22" type="radio" value="3" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q22" type="radio" value="2" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q22" type="radio" value="1" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2.3 -->
                                <div class="row">
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                        </div>
                                    </div>
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                            <label for="">2.3</label>
                                        </div>
                                    </div>
                                    <div class="col s4">
                                        <div class="h-form-label m-t-10">
                                            <label id="">มีการสร้างบรรยากาศที่ดีในการถ่ายทอด</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q23" type="radio" value="5" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q23" type="radio" value="4" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q23" type="radio" value="3" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q23" type="radio" value="2" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q23" type="radio" value="1" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- 2.4 -->
                                <div class="row">
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                        </div>
                                    </div>
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                            <label for="">2.4</label>
                                        </div>
                                    </div>
                                    <div class="col s4">
                                        <div class="h-form-label m-t-10">
                                            <label id="">เปิดโอกาสให้ผู้เข้าร่วมได้มีส่วนร่วม</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q24" type="radio" value="5" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q24" type="radio" value="4" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q24" type="radio" value="3" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q24" type="radio" value="2" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q24" type="radio" value="1" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider"></div><br>
                                <div class="row">
                                    <div class="col s12">
                                        <div class="h-form-label">
                                            <label for="icon_prefix ">
                                                <h6>3. ด้านสถานที่ / ระยะเวลา / อาหาร</h6>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- 3.1 -->
                                <div class="row">
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                        </div>
                                    </div>
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                            <label for="">3.1</label>
                                        </div>
                                    </div>
                                    <div class="col s4">
                                        <div class="h-form-label m-t-10">
                                            <label id="">ความเหมาะสมของสถานที่จัดงาน และการเดินทาง</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q31" type="radio" value="5" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q31" type="radio" value="4" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q31" type="radio" value="3" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q31" type="radio" value="2" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q31" type="radio" value="1" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- 3.2 -->
                                <div class="row">
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                        </div>
                                    </div>
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                            <label for="">3.2</label>
                                        </div>
                                    </div>
                                    <div class="col s4">
                                        <div class="h-form-label m-t-10">
                                            <label id="">วันและเวลาที่จัดสัมมนา</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q32" type="radio" value="5" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q32" type="radio" value="4" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q32" type="radio" value="3" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q32" type="radio" value="2" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q32" type="radio" value="1" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- 3.3 -->
                                <div class="row">
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                        </div>
                                    </div>
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                            <label for="">3.3</label>
                                        </div>
                                    </div>
                                    <div class="col s4">
                                        <div class="h-form-label m-t-10">
                                            <label id="">ความพร้อมของอุปกรณ์นำเสนอ ภาพ เครื่องเสียง</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q33" type="radio" value="5" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q33" type="radio" value="4" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q33" type="radio" value="3" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q33" type="radio" value="2" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q33" type="radio" value="1" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- 3.4 -->
                                <div class="row">
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                        </div>
                                    </div>
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                            <label for="">3.4</label>
                                        </div>
                                    </div>
                                    <div class="col s4">
                                        <div class="h-form-label m-t-10">
                                            <label id="">ของว่างรับรอง และของที่ระลึก</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q34" type="radio" value="5" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q34" type="radio" value="4" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q34" type="radio" value="3" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q34" type="radio" value="2" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q34" type="radio" value="1" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider"></div><br>
                                <div class="row">
                                    <div class="col s12">
                                        <div class="h-form-label" style="">
                                            <label for="icon_prefix ">
                                                <h6>4. ด้านการปฏิบัติงานของเจ้าหน้าที่ผู้จัดสัมมนา</h6>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- 4.1 -->
                                <div class="row">
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                        </div>
                                    </div>
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                            <label for="">4.1</label>
                                        </div>
                                    </div>
                                    <div class="col s4">
                                        <div class="h-form-label m-t-10">
                                            <label id="">การประชาสัมพันธ์งาน</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q41" type="radio" value="5" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q41" type="radio" value="4" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q41" type="radio" value="3" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q41" type="radio" value="2" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q41" type="radio" value="1" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- 4.2 -->
                                <div class="row">
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                        </div>
                                    </div>
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                            <label for="">4.2</label>
                                        </div>
                                    </div>
                                    <div class="col s4">
                                        <div class="h-form-label m-t-10">
                                            <label id="">การลงทะเบียนเข้าร่วมงาน</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q42" type="radio" value="5" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q42" type="radio" value="4" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q42" type="radio" value="3" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q42" type="radio" value="2" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q42" type="radio" value="1" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- 4.3 -->
                                <div class="row">
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                        </div>
                                    </div>
                                    <div class="col s1">
                                        <div class="h-form-label m-t-10">
                                            <label for="">4.3</label>
                                        </div>
                                    </div>
                                    <div class="col s4">
                                        <div class="h-form-label m-t-10">
                                            <label id="">การอำนวยความสะดวกโดยเจ้าหน้าที่</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q43" type="radio" value="5" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q43" type="radio" value="4" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q43" type="radio" value="3" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q43" type="radio" value="2" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s1">
                                        <div class="h-form-label" style="justify-content: center;">
                                            <label>
                                                <input class="with-gap" name="q43" type="radio" value="1" required />
                                                <span for=""></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!--5-->
                                <div class="divider"></div><br>
                                <div class="row">
                                    <div class="col s12">
                                        <div class="h-form-label" style="">
                                            <label for="icon_prefix ">
                                                <h6>5. หากมีงานสัมมนาครั้งถัดไป คุณยินดีเข้าร่วมหรือไม่</h6>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- 7 -->
                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label m-t-10">
                                            <label for=""></label>
                                        </div>
                                    </div>
                                    <div class="input-field col s4">
                                        <div class="h-form-label" style="">
                                            <label>
                                                <input class="with-gap" name="q5" type="radio" value="เข้าร่วม" required />
                                                <span for="">เข้าร่วม</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s4">
                                        <div class="h-form-label" style="">
                                            <label>
                                                <input class="with-gap" name="q5" type="radio" value="ไม่เข้าร่วม" required />
                                                <span for="">ไม่เข้าร่วม</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col s2">
                                        <div class="h-form-label m-t-10">
                                            <label for=""></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider"></div><br>
                                <div class="row">
                                    <div class="col s12">
                                        <div class="h-form-label" style="">
                                            <label for="icon_prefix ">
                                                <h6>6. การจัดงานครั้งต่อไป ท่านสะดวกเข้าร่วมช่วงเวลาใด</h6>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- 5 -->
                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label m-t-10">
                                            <label for=""></label>
                                        </div>
                                    </div>
                                    <div class="input-field col s4">
                                        <div class="h-form-label" style="">
                                            <label>
                                                <input class="with-gap" name="q6" type="radio" value="ช่วงเช้า (9:00 - 12:00 น.)" required />
                                                <span for="">ช่วงเช้า (9:00 - 12:00 น.)</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s4">
                                        <div class="h-form-label" style="j">
                                            <label>
                                                <input class="with-gap" name="q6" type="radio" value="ช่วงบ่าย (13:00 - 16:00 น.)" required />
                                                <span for="">ช่วงบ่าย (13:00 - 16:00 น.)</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col s2">
                                        <div class="h-form-label m-t-10">
                                            <label for=""></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider"></div><br>
                                <div class="row">
                                    <div class="col s12">
                                        <div class="h-form-label" style="">
                                            <label for="icon_prefix ">
                                                <h6>7. กิจกรรมที่ต้องการให้จัดในครั้งถัดไป</h6>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- 6 -->
                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label m-t-10">
                                            <label for=""></label>
                                        </div>
                                    </div>
                                    <div class="input-field col s4">
                                        <div class="h-form-label" style="">
                                            <label>
                                                <input class="with-gap" name="q7[]" type="checkbox" value="กลยุทธ์จัดการร้านเล็บ" />
                                                <span for="">กลยุทธ์จัดการร้านเล็บ</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s4">
                                        <div class="h-form-label" style="">
                                            <label>
                                                <input class="with-gap" name="q7[]" type="checkbox" value="เทคโนโลยี แอปพลิเคชั่นที่เหมาะสำหรับร้านเล็บ" />
                                                <span for="">เทคโนโลยี แอปพลิเคชั่นที่เหมาะสำหรับร้านเล็บ</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col s2">
                                        <div class="h-form-label m-t-10">
                                            <label for=""></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label m-t-10">
                                            <label for=""></label>
                                        </div>
                                    </div>
                                    <div class="input-field col s4">
                                        <div class="h-form-label" style="">
                                            <label>
                                                <input class="with-gap" name="q7[]" type="checkbox" value="แข่งขันการทำเล็บ" />
                                                <span for="">แข่งขันการทำเล็บ</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s4">
                                        <div class="h-form-label" style="">
                                            <label>
                                                <input class="with-gap" name="q7[]" type="checkbox" value="Loga Workshop การใช้งานแอปLogaสำหรับร้านเล็บ" />
                                                <span for="">Loga Workshop การใช้งานแอปLogaสำหรับร้านเล็บ</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col s2">
                                        <div class="h-form-label m-t-10">
                                            <label for=""></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label m-t-10">
                                            <label for=""></label>
                                        </div>
                                    </div>
                                    <div class="input-field col s4">
                                        <div class="h-form-label" style="">
                                            <label>
                                                <input class="with-gap" name="q7[]" type="checkbox" value="รวมร้านเล็บ แชร์ประสบการณ์ความสำเร็จ" />
                                                <span for="">รวมร้านเล็บ แชร์ประสบการณ์ความสำเร็จ</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s4">
                                        <div class="h-form-label" style="">
                                            <label>
                                                <input class="with-gap" name="q7[]" type="checkbox" value="Beauty Blogger แชร์เคล็ดลับ content ในการทำเล็บ" />
                                                <span for="">Beauty Blogger แชร์เคล็ดลับ content ในการทำเล็บ</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col s2">
                                        <div class="h-form-label m-t-10">
                                            <label for=""></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label m-t-10">
                                            <label for=""></label>
                                        </div>
                                    </div>
                                    <div class="input-field col s8">
                                        <div class="h-form-label" style="">
                                            <label>
                                                <input class="with-gap" name="q7[]" type="checkbox" value="อื่นๆ" />
                                                <span for="">อื่นๆ </span>
                                            </label>&nbsp;&nbsp;
                                            <label>
                                                <input name="q7text" type="text" value="" size="100%" />
                                                <span for=""> </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col s2">
                                        <div class="h-form-label m-t-10">
                                            <label for=""></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider"></div><br>

                                <div class="row">
                                    <div class="col s12">
                                        <div class="h-form-label" style="">
                                            <label for="icon_prefix ">
                                                <h6>8. ทำไมถึงตัดสินใจเข้าร่วมงานสัมมนา</h6>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- 8 -->
                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label m-t-10">
                                            <label for=""></label>
                                        </div>
                                    </div>
                                    <div class="input-field col s8">
                                                                                   
                                        <textarea name="q8" rows="10" cols="50" required></textarea>
                                    </div>
                                    <div class="col s2">
                                        <div class="h-form-label m-t-10">
                                            <label for=""></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider"></div><br>
                                <div class="row">
                                    <div class="col s12">
                                        <div class="h-form-label" style="">
                                            <label for="icon_prefix ">
                                                <h6>9. ข้อคิดเห็นและข้อเสนอแนะอื่นๆ</h6>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- 9 -->
                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label m-t-10">
                                            <label for=""></label>
                                        </div>
                                    </div>
                                    <div class="input-field col s8">
                                                                                    
                                        <textarea name="q9" rows="10" cols="50" required></textarea>
                                    </div>
                                    <div class="col s2">
                                        <div class="h-form-label m-t-10">
                                            <label for=""></label>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="card-content">
                                    <div class="form-action">
                                        <button class="btn cyan waves-effect waves-light" type="submit">ส่งแบบสอบถาม</button>
                                        <button class="btn waves-effect waves-light grey darken-4" type="reset" onclick="return confirm('ยืนยันการรีเช็ทข้อมูล?');">ยกเลิก</button>
                                    </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- ============================================================== -->
    <!-- Footer -->
    <!-- ============================================================== -->
    <?php include 'footer.php'; ?>
    <!-- ============================================================== -->
    <script>
        $(document).ready(function() {

            function CheckRequired(event) {
                var $form = $(this);

                var fields = $("input[name='q7[]']").serializeArray();

                if (fields.length === 0) {

                    return false;

                } else {
                    return true;

                }
            }

            $("#SURVEY").on("submit", function(e) {

                e.preventDefault();
                console.log(CheckRequired());
                if (CheckRequired()) {
                    //alert(1);
                    $.ajax({
                        url: "insertLoga.php",
                        type: "post",
                        data: $(this).serialize(),
                        success: function(result) {
                            jQuery("#SURVEY input[type=radio]").prop("checked", false);
                            console.log("result= " + result);
                            if (result = "1") {
                                Swal({
                                    position: 'center',
                                    type: 'success',
                                    title: 'บันทึกข้อมูลเรียบร้อย',
                                    showConfirmButton: true,
                                }).then((result) => {
                                    if (result.value) {
                                        window.location = "thankyou.php";
                                    }
                                });
                            }
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            Swal(
                                'เกิดข้อผิดพลาด!',
                                'ลองอีกครั้ง!',
                                'error'
                            );
                        }
                    });
                } else {
                    alert("กรุณาเลือกข้อมูล '7. กิจกรรมที่ต้องการให้จัดในครั้งถัดไป' อย่างน้อย 1 ข้อ");
                }

            });

        });
    </script>

</body>

</html>