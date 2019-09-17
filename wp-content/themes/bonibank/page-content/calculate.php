<section class="calculate-section">
    <div class="container">
        <div class="content-header text-center">
            <p>貸款試算</p>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="contact-text">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <p>
                                您好，對於您目前的貸款利率及額度還滿意嗎？請直接輸入您的貸款金額、利率、年限試算貸款月付金額，立即評估每月繳款金額。
                            </p>
                        </div>
                    </div>
                </div>
                <nav class="">
                    <div class="nav-cal nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">貸款無寬限期</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">貸款有寬限期</a>
                    </div>
                </nav>
                <div class="tab-content tab-cal" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="form-group row">
                            <label for="cal_10" class="col-4 text-right col-form-label">貸款金額</label>
                            <div class="col-5">
                                <input type="number" class="" id="cal_10">
                            </div>
                            <label for="" class="col-3 col-form-label">萬元</label>
                        </div>
                        <div class="form-group row">
                            <label for="cal_11" class="col-4 text-right col-form-label">貸款利率</label>
                            <div class="col-5">
                                <input type="number" class="" id="cal_11">
                            </div>
                            <label for="" class="col-3 col-form-label">％</label>
                        </div>
                        <div class="form-group row">
                            <label for="cal_12" class="col-4 text-right col-form-label">貸款年限</label>
                            <div class="col-5">
                                <input type="number" class="" id="cal_12">
                            </div>
                            <label for="" class="col-3 col-form-label">年</label>
                        </div>
                        <div class="row">
                            <div class="col-12 text-right mt-2">
                                <button class="cal-btn JQ_cal_submit" onclick="calculate_1();">立即試算</button>
                                <hr style="border-color:#29b9eb;">
                                <p class="cal-result" id="cal_result"></p>
                                <!-- <div class="form-group row">
                                    <label for="cal_result" class="col-6 text-right col-form-label">每月須還本息</label>
                                    <div class="col-4">
                                        <input type="text" class="cal-result" id="cal_result">
                                    </div>
                                    <label for="" class="col-1 col-form-label text-left">元</label>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="form-group row">
                            <label for="cal_20" class="col-4 text-right col-form-label">貸款金額</label>
                            <div class="col-5">
                                <input type="number" class="" id="cal_20">
                            </div>
                            <label for="" class="col-3 col-form-label">萬元</label>
                        </div>
                        <div class="form-group row">
                            <label for="cal_21" class="col-4 text-right col-form-label">貸款利率</label>
                            <div class="col-5">
                                <input type="number" class="" id="cal_21">
                            </div>
                            <label for="" class="col-3 col-form-label">％</label>
                        </div>
                        <div class="form-group row">
                            <label for="cal_22" class="col-4 text-right col-form-label">貸款年限</label>
                            <div class="col-5">
                                <input type="number" class="" id="cal_22">
                            </div>
                            <label for="" class="col-3 col-form-label">年</label>
                        </div>
                        <div class="form-group row">
                            <label for="cal_23" class="col-4 text-right col-form-label">寬限期限</label>
                            <div class="col-5">
                                <input type="number" class="" id="cal_23">
                            </div>
                            <label for="" class="col-3 col-form-label">年</label>
                        </div>
                        <div class="row">
                            <div class="col-12 text-right mt-2">
                                <button class="cal-btn JQ_cal_submit" onclick="calculate_2();">立即試算</button>
                                <hr style="border-color:#29b9eb;">
                                <p class="cal-result" id="cal_result_1"></p>
                                <p class="cal-result" id="cal_result_2"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
