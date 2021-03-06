<div class="modal fade show" tabindex="-1" role="dialog" id="insertChildren" style="display:none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">เพิ่มเด็กพิเศษ</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4" style="text-align: center;">
                        <div>
                            <img style="width: 200px; height: 200px;" src="<?php echo base_url(); ?>assets/images/admin/DefualtUser.png" id="preview1" class="img-thumbnail">
                        </div>
                        <div>
                            <input id="inputFile1" type="file" style="visibility: hidden;position: absolute;" class="file1" accept="image/*">
                            <div class="input-group my-3">
                                <input type="text" class="form-control" disabled placeholder="เลือกรูปโปรไฟล์" id="file1">
                                <div class="input-group-append">
                                    <button type="button" id="browse1" class="browse btn btn-primary">เลือกไฟล์</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">คำนำหน้าชื่อภาษาไทย</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="prenameTH1" required="" onchange="auto_prename('add')">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erprenameTH1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกคำนำหน้าชื่อภาษาไทย
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ชื่อ (ภาษาไทย)</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isThaichar(this.value,this)" id="fnameTH1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น สวัสดี">
                            <label class="text-paragraph" id="erfnameTH1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อภาษาไทย
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">นามสกุล (ภาษาไทย)</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isThaichar(this.value,this)" id="lnameTH1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น สมมุติ">
                            <label class="text-paragraph" id="erlnameTH1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อภาษาไทย
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">คำนำหน้าชื่อภาษาอังกฤษ</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="prenameEN1" required="" disabled>
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erprenameEN1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกคำนำหน้าชื่อภาษาอังกฤษ
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ชื่อ (ภาษาอังกฤษ)</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isEngchar(this.value,this)" id="fnameEN1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น สวัสดี">
                            <label class="text-paragraph" id="erfnameEN1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อภาษาอังกฤษ
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">นามสกุล (ภาษาอังกฤษ)</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isEngchar(this.value,this)" id="lnameEN1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น สมมุติ">
                            <label class="text-paragraph" id="erlnameEN1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อภาษาอังกฤษ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">วัน/เดือน/ปี เกิด</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input id="datepicker1" placeholder="วัน/เดือน/ปี" readonly>
                            <label class="text-paragraph" id="erdatepicker1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกวันเกิดให้ถูกต้อง
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ประเภทเด็กพิเศษ</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="tc1" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="ertc1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกประเภทเด็กพิเศษ
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">โรงเรียน</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="school1" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erschool1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกโรงเรียน
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ผู้ปกครอง</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="select2bs4 form-control text-paragraph" id="parent1" required="" onchange="autoAddressByParent('add')">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erparent1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกผู้ปกครอง
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ผู้เชียวชาญ</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="expert1" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erexpert1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกผู้เชี่ยวชาญ
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">บ้านเลขที่</label>
                        </div>
                        <div>
                            <input id="HouseNo1" onkeyup="isHomeNumchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น 70/1">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">หมู่</label>
                        </div>
                        <div>
                            <input id="VillageNo1" onkeyup="isNumAllchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น 10">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ถนน</label>
                        </div>
                        <div>
                            <input id="Road1" onkeyup="isRoadchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น ถนนมิตรภาพ">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">จังหวัด</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="SelectPro1" required="" onchange="fetch_amphur('add')">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erSelectPro1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกจังหวัด
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">อำเภอ</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" disabled id="SelectAm1" required="" onchange="fetch_district('add')">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erSelectAm1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกอำเภอ
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ตำบล</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" disabled id="SelectDist1" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erSelectDist1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกตำบล
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ไปรษณีย์</label>
                        </div>
                        <div>
                            <input id="Postcode1" style="font-family: 'Kanit';" type="text" class="form-control" disabled placeholder="30000">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">การแพ้ยาของเด็กพิเศษ</label>
                        </div>
                        <div id="drug_add">

                        </div>
                        <div>
                            <div class="input-group">
                                <select class="custom-select text-paragraph" id="selectDrug1">
                                    <option selected>--- กรุณาเลือก ---</option>
                                </select>
                                <div class="input-group-append">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" onclick="addDrug()"><i class="fas fa-plus-square"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">โรคประจำตัวของเด็กพิเศษ</label>
                        </div>
                        <div id="diseased_add">

                        </div>
                        <div>
                            <div class="input-group">
                                <select class="custom-select text-paragraph" id="selectDiseased1">
                                    <option selected>--- กรุณาเลือก ---</option>
                                </select>
                                <div class="input-group-append">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" onclick="addDiseased()"><i class="fas fa-plus-square"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text_btn" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn text_btn" style="background-color: #1e7e34; color:white;" onclick="onClickSave('insert')">บันทึก</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade show" tabindex="-1" role="dialog" id="editChildren" style="display:none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">แก้ไขเด็กพิเศษ</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4" style="text-align: center;">
                        <div>
                            <img style="width: 200px; height: 200px;" src="<?php echo base_url(); ?>assets/images/admin/DefualtUser.png" id="preview2" class="img-thumbnail">
                        </div>
                        <div>
                            <input id="inputFile2" type="file" style="visibility: hidden;position: absolute;" class="file2" accept="image/*">
                            <div class="input-group my-3">
                                <input type="text" class="form-control" disabled placeholder="เลือกรูปโปรไฟล์" id="file2">
                                <div class="input-group-append">
                                    <button type="button" id="browse2" class="browse btn btn-primary">เลือกไฟล์</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">คำนำหน้าชื่อภาษาไทย</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="prenameTH2" required="" onchange="auto_prename('edit')">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erprenameTH2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกคำนำหน้าชื่อภาษาไทย
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ชื่อ (ภาษาไทย)</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isThaichar(this.value,this)" id="fnameTH2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น สวัสดี">
                            <label class="text-paragraph" id="erfnameTH2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อภาษาไทย
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">นามสกุล (ภาษาไทย)</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isThaichar(this.value,this)" id="lnameTH2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น สมมุติ">
                            <label class="text-paragraph" id="erlnameTH2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อภาษาไทย
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">คำนำหน้าชื่อภาษาอังกฤษ</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="prenameEN2" required="" disabled>
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erprenameEN2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกคำนำหน้าชื่อภาษาอังกฤษ
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ชื่อ (ภาษาอังกฤษ)</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isEngchar(this.value,this)" id="fnameEN2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น สวัสดี">
                            <label class="text-paragraph" id="erfnameEN2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อภาษาอังกฤษ
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">นามสกุล (ภาษาอังกฤษ)</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isEngchar(this.value,this)" id="lnameEN2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น สมมุติ">
                            <label class="text-paragraph" id="erlnameEN2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อภาษาอังกฤษ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">วัน/เดือน/ปี เกิด</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input id="datepicker2" placeholder="วัน/เดือน/ปี" readonly>
                            <label class="text-paragraph" id="erdatepicker2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกวันเกิดให้ถูกต้อง
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ประเภทเด็กพิเศษ</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="tc2" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="ertc2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกประเภทเด็กพิเศษ
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">โรงเรียน</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="school2" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erschool2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกโรงเรียน
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ผู้ปกครอง</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="parent2" onchange="autoAddressByParent('edit')" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erparent2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกผู้ปกครอง
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ผู้เชียวชาญ</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="expert2" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erexpert2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกผู้เชี่ยวชาญ
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">บ้านเลขที่</label>
                        </div>
                        <div>
                            <input id="HouseNo2" onkeyup="isHomeNumchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น 70/2">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">หมู่</label>
                        </div>
                        <div>
                            <input id="VillageNo2" onkeyup="isNumAllchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น 20">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ถนน</label>
                        </div>
                        <div>
                            <input id="Road2" onkeyup="isRoadchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น ถนนมิตรภาพ">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">จังหวัด</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="SelectPro2" required="" onchange="fetch_amphur('edit')">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erSelectPro2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกจังหวัด
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">อำเภอ</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="SelectAm2" required="" onchange="fetch_district('edit')">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erSelectAm2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกอำเภอ
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ตำบล</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="SelectDist2" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erSelectDist2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกตำบล
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ไปรษณีย์</label>
                        </div>
                        <div>
                            <input id="Postcode2" style="font-family: 'Kanit';" type="text" class="form-control" disabled placeholder="30000">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">การแพ้ยาของเด็กพิเศษ</label>
                        </div>
                        <div id="drug_update">

                        </div>
                        <div>
                            <div class="input-group">
                                <select class="custom-select text-paragraph select2bs4" id="selectDrug2">
                                    <option selected>--- กรุณาเลือก ---</option>
                                </select>
                                <div class="input-group-append">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" onclick="updateDrug()"><i class="fas fa-plus-square"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">โรคประจำตัวของเด็กพิเศษ</label>
                        </div>
                        <div id="diseased_update">

                        </div>
                        <div>
                            <div class="input-group">
                                <select class="custom-select text-paragraph select2bs4" id="selectDiseased2">
                                    <option selected>--- กรุณาเลือก ---</option>
                                </select>
                                <div class="input-group-append">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" onclick="updateDiseased()"><i class="fas fa-plus-square"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text_btn" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn text_btn edit_btn" style="background-color: #1e7e34; color:white;" onclick="onClickSave('edit')">บันทึก</button>
            </div>
        </div>
    </div>
</div>

<div class="main-margin padding_main">
    <div class="padding_main bgWhite mainBoxRadius boxHeader">
        <div>
            <h1 class="h1-title">เด็กพิเศษ</h1>
        </div>
    </div>
    <div class="bgWhite padding_main mainBoxRadius main-margin">
        <div>
            <button class="btn_backend text_btn btn" id="btnInsert" data-toggle="modal" data-target="#insertChildren" onclick="add_fetchData()"><i class="fa fa-plus"></i>&nbsp;&nbsp;เพิ่มเด็กพิเศษ</button>
        </div>
        <table id="children" class="table table-bordered table-striped nowrap">
            <thead>
                <tr>
                    <th></th>
                    <th class="th_text">สภานะ</th>
                    <th class="th_text">ลำดับ</th>
                    <th class="th_text">รหัสเด็ก</th>
                    <th class="th_text">ชื่อ</th>
                    <th class="th_text">ประเภทเด็ก</th>
                    <th class="th_text">โรงเรียน</th>
                    <th class="th_text">วันเกิด</th>
                    <th class="th_text">ที่อยู่</th>
                    <th class="th_text">แก้ไข</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<script>
    $('#insertChildren').on('hidden.bs.modal', function() {
        reset_form('add');
    })
    $('#editChildren').on('hidden.bs.modal', function() {
        reset_form('edit');
    })
</script>
<!-- Action function -->
<script>
    var prename = [];
    var drug1 = [];
    var diseased1 = [];
    var drug2 = [];
    var diseased2 = [];

    function onClickEdit(id) {
        $.get('<?php echo base_url('admin/children/getById'); ?>/' + id, (res) => {
            fetch_prename('edit', res.c_prename);
            fetch_typechildren('edit', res.tc_id);
            fetch_school('edit', res.school_id);
            fetch_parent('edit', res.c_parent_id);
            fetch_expert('edit', res.c_expert_id);
            fetch_province('edit', res.c_province);
            fetch_amphur('edit', res.c_amphur);
            fetch_editAddress(res.c_district, res.c_province, res.c_amphur);
            fetch_children_drug('edit');
            fetch_children_allergy('edit');
            createListDrug(id);
            createListDiseased(id);
            $('#fnameTH2').val(res.c_fnameTH);
            $('#lnameTH2').val(res.c_lnameTH);
            $('#fnameEN2').val(res.c_fnameEN);
            $('#lnameEN2').val(res.c_lnameEN);
            $('#datepicker2').val(res.date);
            $('#HouseNo2').val(res.c_house_no);
            $('#VillageNo2').val(res.c_village_no);
            $('#Road2').val(res.c_road);
            $('#Postcode2').val(res.c_zip);
            $("#preview2").attr("src", "<?php echo base_url(); ?>" + res.c_img);
            path_image = res.c_img;
            $('.edit_btn').attr('id', res.c_id);
        });
    }

    function onClickActivate(id) {
        if ($('#toggle-' + id).is(":checked")) {
            $.post('<?php echo base_url('admin/children/update'); ?>/' + id, {
                c_status: 1
            }).done((res) => {
                toastr.info('เปิดการใช้งาน');
            }).fail((xhr, status, error) => {
                toastr.error('Error')
            })
        } else {
            $.post('<?php echo base_url('admin/children/update'); ?>/' + id, {
                c_status: 0
            }).done((res) => {
                toastr.info('ปิดการใช้งาน');
            }).fail((xhr, status, error) => {
                toastr.error('Error')
            })
        }
    }

    function createListDrug(id) {
        $.get('<?php echo base_url('admin/children/DrugSelected'); ?>/' + id).done((res) => {
            res.forEach(element => {
                var name = element.drug_name_th;
                var id = element.drug_id;
                var drug_group = document.getElementById("drug_update");
                var tag = document.createElement("div");
                tag.classList.add("mb-2");
                tag.classList.add("input-group");
                tag.id = id;
                var input = document.createElement("input");
                input.type = "text";
                input.style.fontFamily = "Kanit";
                input.classList.add("form-control");
                input.disabled = true;
                input.placeholder = name;
                var divBtn = document.createElement("div");
                divBtn.classList.add("input-group-append");
                var delBtn = document.createElement("button");
                delBtn.classList.add("btn");
                delBtn.classList.add("btn-outline-secondary");
                delBtn.type = "button";
                delBtn.onclick = function() {
                    delDrugUpdate(id)
                };
                var iconDel = document.createElement("i");
                iconDel.classList.add("fas");
                iconDel.classList.add("fa-trash-alt");
                delBtn.appendChild(iconDel);
                divBtn.appendChild(delBtn);
                tag.appendChild(input);
                tag.appendChild(divBtn);
                drug_group.appendChild(tag);
                drug2.push(id);
            });
        });
    }

    function createListDiseased(id) {
        $.get('<?php echo base_url('admin/children/DiseasedSelected'); ?>/' + id).done((res) => {
            res.forEach(element => {
                var name = element.d_nameTH;
                var id = element.d_id;
                var diseased_group = document.getElementById("diseased_update");
                var tag = document.createElement("div");
                tag.classList.add("mb-2");
                tag.classList.add("input-group");
                tag.id = id;
                var input = document.createElement("input");
                input.type = "text";
                input.style.fontFamily = "Kanit";
                input.classList.add("form-control");
                input.disabled = true;
                input.placeholder = name;
                var divBtn = document.createElement("div");
                divBtn.classList.add("input-group-append");
                var delBtn = document.createElement("button");
                delBtn.classList.add("btn");
                delBtn.classList.add("btn-outline-secondary");
                delBtn.type = "button";
                delBtn.onclick = function() {
                    delDiseasedUpdate(id)
                };
                var iconDel = document.createElement("i");
                iconDel.classList.add("fas");
                iconDel.classList.add("fa-trash-alt");
                delBtn.appendChild(iconDel);
                divBtn.appendChild(delBtn);
                tag.appendChild(input);
                tag.appendChild(divBtn);
                diseased_group.appendChild(tag);
                diseased2.push(id);
            });
        });
    }

    async function fetch_editAddress(district_id, province_id, amphur_id) {
        await $.get('<?php echo base_url('Api/Address/province'); ?>', (res) => {
            res.forEach(element => {
                if (element.PROVINCE_ID == province_id) {
                    $('#SelectPro2').append('<option value="' + element.PROVINCE_ID + '" selected>' + element.PROVINCE_NAME + '</option>')
                } else {
                    $('#SelectPro2').append('<option value="' + element.PROVINCE_ID + '">' + element.PROVINCE_NAME + '</option>')
                }
            });
        })


        var p = await $('#SelectPro2').val();
        if (p == '--- กรุณาเลือก ---') {
            await $('#SelectAm2').prop('disabled', true);
        } else {
            await $('#SelectAm2').empty();
            await $('#SelectAm2').append('<option selected="">--- กรุณาเลือก ---</option>');
            await $('#SelectAm2').prop('disabled', false);
            await $('#SelectDist2').prop('disabled', true);
            await $.get('<?php echo base_url('Api/Address/amphur'); ?>/' + p, (res) => {
                res.forEach(element => {
                    if (element.AMPHUR_ID == amphur_id) {
                        $('#SelectAm2').append('<option value="' + element.AMPHUR_ID + '" selected>' + element.AMPHUR_NAME + '</option>')
                    } else {
                        $('#SelectAm2').append('<option value="' + element.AMPHUR_ID + '">' + element.AMPHUR_NAME + '</option>')
                    }
                });
            })
        }

        var amphur = await $('#SelectAm2').val();
        if (amphur == '--- กรุณาเลือก ---') {
            await $('#SelectDist2').append('<option selected="">--- กรุณาเลือก ---</option>');
            await $('#SelectDist2').prop('disabled', true);
        } else {
            await $.get('<?php echo base_url('Api/Address/amphurById'); ?>/' + amphur, (res) => {
                $('#Postcode2').val(res.POSTCODE);
            })
            await $('#SelectDist2').prop('disabled', false);
            await $('#SelectDist2').empty();
            await $('#SelectDist2').append('<option selected="">--- กรุณาเลือก ---</option>');
            await $.get('<?php echo base_url('Api/Address/district'); ?>/' + amphur, (res) => {
                res.forEach(element => {
                    if (element.DISTRICT_ID == district_id) {
                        $('#SelectDist2').append('<option value="' + element.DISTRICT_ID + '" selected>' + element.DISTRICT_NAME + '</option>')
                    } else {
                        $('#SelectDist2').append('<option value="' + element.DISTRICT_ID + '">' + element.DISTRICT_NAME + '</option>');
                    }
                });
            });
        }
    }

    async function fetch_AddAddress(district_id, province_id, amphur_id) {
        await $.get('<?php echo base_url('Api/Address/province'); ?>', (res) => {
            res.forEach(element => {
                if (element.PROVINCE_ID == province_id) {
                    $('#SelectPro1').append('<option value="' + element.PROVINCE_ID + '" selected>' + element.PROVINCE_NAME + '</option>')
                } else {
                    $('#SelectPro1').append('<option value="' + element.PROVINCE_ID + '">' + element.PROVINCE_NAME + '</option>')
                }
            });
        })


        var p = await $('#SelectPro1').val();
        if (p == '--- กรุณาเลือก ---') {
            await $('#SelectAm1').prop('disabled', true);
        } else {
            await $('#SelectAm1').empty();
            await $('#SelectAm1').append('<option selected="">--- กรุณาเลือก ---</option>');
            await $('#SelectAm1').prop('disabled', false);
            await $('#SelectDist1').prop('disabled', true);
            await $.get('<?php echo base_url('Api/Address/amphur'); ?>/' + p, (res) => {
                res.forEach(element => {
                    if (element.AMPHUR_ID == amphur_id) {
                        $('#SelectAm1').append('<option value="' + element.AMPHUR_ID + '" selected>' + element.AMPHUR_NAME + '</option>')
                    } else {
                        $('#SelectAm1').append('<option value="' + element.AMPHUR_ID + '">' + element.AMPHUR_NAME + '</option>')
                    }
                });
            })
        }

        var amphur = await $('#SelectAm1').val();
        if (amphur == '--- กรุณาเลือก ---') {
            await $('#SelectDist1').append('<option selected="">--- กรุณาเลือก ---</option>');
            await $('#SelectDist1').prop('disabled', true);
        } else {
            await $.get('<?php echo base_url('Api/Address/amphurById'); ?>/' + amphur, (res) => {
                $('#Postcode1').val(res.POSTCODE);
            })
            await $('#SelectDist1').prop('disabled', false);
            await $('#SelectDist1').empty();
            await $('#SelectDist1').append('<option selected="">--- กรุณาเลือก ---</option>');
            await $.get('<?php echo base_url('Api/Address/district'); ?>/' + amphur, (res) => {
                res.forEach(element => {
                    if (element.DISTRICT_ID == district_id) {
                        $('#SelectDist1').append('<option value="' + element.DISTRICT_ID + '" selected>' + element.DISTRICT_NAME + '</option>')
                    } else {
                        $('#SelectDist1').append('<option value="' + element.DISTRICT_ID + '">' + element.DISTRICT_NAME + '</option>');
                    }
                });
            });
        }
    }

    function add_fetchData() {
        fetch_prename('add');
        fetch_typechildren('add');
        fetch_school('add');
        fetch_parent('add');
        fetch_expert('add');
        fetch_province('add');
        fetch_children_drug('add');
        fetch_children_allergy('add');
    }

    function reset_form(fn) {
        prename = [];
        drug1 = [];
        diseased1 = [];
        drug2 = [];
        diseased2 = [];
        if (fn == 'add') {
            $('#drug_add').empty();
            $('#diseased_add').empty();
            $("#preview1").attr("src", "<?php echo base_url(); ?>assets/images/admin/DefualtUser.png");
            elementInputAdd = [
                '#prenameTH1',
                '#prenameEN1',
                '#fnameTH1',
                '#lnameTH1',
                '#fnameEN1',
                '#lnameEN1',
                '#datepicker1',
                '#HouseNo1',
                '#VillageNo1',
                '#Road1',
                '#Postcode1',
                '#file1'
            ];
            elementInputAdd.forEach(element => {
                $(element).val('');
            });
            elementSelectAdd = [
                '#SelectPro1',
                '#SelectAm1',
                '#SelectDist1',
                '#tc1',
                '#parent1',
                '#expert1',
                '#school1',
                '#selectDrug1',
                '#selectDiseased1'
            ];
            elementSelectAdd.forEach(element => {
                $(element).empty();
                $(element).append('<option selected="">--- กรุณาเลือก ---</option>');
            });
        }
        if (fn == 'edit') {
            $('#drug_update').empty();
            $('#diseased_update').empty();
            $("#preview2").attr("src", "<?php echo base_url(); ?>assets/images/admin/DefualtUser.png");
            elementInputAdd = [
                '#prenameTH2',
                '#prenameEN2',
                '#fnameTH2',
                '#lnameTH2',
                '#fnameEN2',
                '#lnameEN2',
                '#datepicker2',
                '#HouseNo2',
                '#VillageNo2',
                '#Road2',
                '#Postcode2',
                '#file2'
            ];
            elementInputAdd.forEach(element => {
                $(element).val('');
            });
            elementSelectAdd = [
                '#SelectPro2',
                '#SelectAm2',
                '#SelectDist2',
                '#tc2',
                '#parent2',
                '#expert2',
                '#school2',
                '#selectDrug2',
                '#selectDiseased2'
            ];
            elementSelectAdd.forEach(element => {
                $(element).empty();
                $(element).append('<option selected="">--- กรุณาเลือก ---</option>');
            });
        }
        $('#children').DataTable().ajax.reload();
    }

    function fetch_children_drug(fn) {
        if (fn == 'add') {
            $('#selectDrug1').empty();
            $('#selectDrug1').append('<option selected="">--- กรุณาเลือก ---</option>');
            $.get('<?php echo base_url('admin/drug/getListSelect'); ?>').done((res) => {
                res.data.forEach(element => {
                    $('#selectDrug1').append('<option value="' + element.drug_id + '">' +
                        element.drug_name_th + '</option>');
                });
            });
        }
        if (fn == 'edit') {
            $('#selectDrug2').empty();
            $('#selectDrug2').append('<option selected="">--- กรุณาเลือก ---</option>');
            $.get('<?php echo base_url('admin/drug/getListSelect'); ?>').done((res) => {
                res.data.forEach(element => {
                    $('#selectDrug2').append('<option value="' + element.drug_id + '">' +
                        element.drug_name_th + '</option>');
                });
            });
        }
    }

    function fetch_children_allergy(fn) {
        if (fn == 'add') {
            $('#selectDiseased1').empty();
            $('#selectDiseased1').append('<option selected="">--- กรุณาเลือก ---</option>');
            $.get('<?php echo base_url('admin/Diseased/getListSelect'); ?>').done((res) => {
                res.data.forEach(element => {
                    $('#selectDiseased1').append('<option value="' + element.d_id + '">' +
                        element.d_nameTH + '</option>');
                });
            });
        }
        if (fn == 'edit') {
            $('#selectDiseased2').empty();
            $('#selectDiseased2').append('<option selected="">--- กรุณาเลือก ---</option>');
            $.get('<?php echo base_url('admin/Diseased/getListSelect'); ?>').done((res) => {
                res.data.forEach(element => {
                    $('#selectDiseased2').append('<option value="' + element.d_id + '">' +
                        element.d_nameTH + '</option>');
                });
            });
        }
    }

    function fetch_prename(fn, id = null) {
        if (fn == 'add') {
            $('#prenameTH1').empty();
            $('#prenameTH1').append('<option selected="">--- กรุณาเลือก ---</option>');
            $('#prenameEN1').empty();
            $('#prenameEN1').append('<option selected="">--- select ---</option>');
            $.get('<?php echo base_url("admin/pre_name/getListSelect"); ?>').done((res) => {
                res.data.forEach(element => {
                    $('#prenameTH1').append('<option value="' + element.n_id + '">' + element
                        .n_thainame +
                        '</option>');
                });
                prename = res.data;
            });
        }

        if (fn == 'edit') {
            $('#prenameTH2').empty();
            $('#prenameTH2').append('<option>--- กรุณาเลือก ---</option>');
            $('#prenameEN2').empty();
            $('#prenameEN2').append('<option>--- select ---</option>');
            $.get('<?php echo base_url("admin/pre_name/getListSelect"); ?>').done((res) => {
                res.data.forEach(element => {
                    if (element.n_id == id) {
                        $('#prenameTH2').append('<option selected value="' + element.n_id + '">' + element
                            .n_thainame +
                            '</option>');
                        $('#prenameEN2').append('<option selected value="' + element.n_id + '">' + element
                            .n_engname +
                            '</option>');
                    } else {
                        $('#prenameTH2').append('<option value="' + element.n_id + '">' + element
                            .n_thainame +
                            '</option>');
                        $('#prenameEN2').append('<option value="' + element.n_id + '">' + element
                            .n_engname +
                            '</option>');
                    }
                });
                prename = res.data;
            });
        }
    }

    function auto_prename(fn) {
        if (fn == 'add') {
            var p_id = $('#prenameTH1').val();
            $('#prenameEN1').empty();
            $('#prenameEN1').append('<option selected="">--- select ---</option>');
            prename.forEach(element => {
                if (element.n_id == p_id) {
                    $('#prenameEN1').append('<option value="' + element.n_id + '" selected>' + element.n_engname +
                        '</option>');
                } else {
                    $('#prenameEN1').append('<option value="' + element.n_id + '">' + element.n_engname +
                        '</option>');
                }
            });
        }

        if (fn == 'edit') {
            var p_id = $('#prenameTH2').val();
            $('#prenameEN1').empty();
            $('#prenameEN2').append('<option selected="">--- select ---</option>');
            prename.forEach(element => {
                if (element.n_id == p_id) {
                    $('#prenameEN2').append('<option value="' + element.n_id + '" selected>' + element.n_engname +
                        '</option>');
                } else {
                    $('#prenameEN2').append('<option value="' + element.n_id + '">' + element.n_engname +
                        '</option>');
                }
            });
        }
    }

    function fetch_typechildren(fn, id = null) {
        if (fn == 'add') {
            $('#tc1').empty();
            $('#tc1').append('<option selected="">--- กรุณาเลือก ---</option>');
            $.get('<?php echo base_url('admin/type_children/getListSelect'); ?>').done((res) => {
                res.data.forEach(element => {
                    $('#tc1').append('<option value="' + element.tc_id + '">' + element.tc_name +
                        '</option>');
                });
            });
        }
        if (fn == 'edit') {
            $('#tc2').empty();
            $('#tc2').append('<option>--- กรุณาเลือก ---</option>');
            $.get('<?php echo base_url('admin/type_children/getListSelect'); ?>').done((res) => {
                res.data.forEach(element => {
                    if (element.tc_id == id) {
                        $('#tc2').append('<option selected value="' + element.tc_id + '">' + element.tc_name +
                            '</option>');
                    } else {
                        $('#tc2').append('<option value="' + element.tc_id + '">' + element.tc_name +
                            '</option>');
                    }
                });
            });
        }
    }

    function fetch_school(fn, id = null) {
        if (fn == 'add') {
            $('#school1').empty();
            $('#school1').append('<option selected="">--- กรุณาเลือก ---</option>');
            $.get('<?php echo base_url('admin/school/getListSelect'); ?>').done((res) => {
                res.data.forEach(element => {
                    $('#school1').append('<option value="' + element.sc_id + '">' + element.sc_nameTH +
                        '</option>');
                });
            });
        }
        if (fn == 'edit') {
            $('#school2').empty();
            $('#school2').append('<option>--- กรุณาเลือก ---</option>');
            $.get('<?php echo base_url('admin/school/getListSelect'); ?>').done((res) => {
                res.data.forEach(element => {
                    if (element.sc_id == id) {
                        $('#school2').append('<option selected value="' + element.sc_id + '">' + element.sc_nameTH +
                            '</option>');
                    } else {
                        $('#school2').append('<option value="' + element.sc_id + '">' + element.sc_nameTH +
                            '</option>');
                    }
                });
            });
        }

    }

    function fetch_parent(fn, id = null) {
        if (fn == 'add') {
            $('#parent1').empty();
            $('#parent1').append('<option selected="">--- กรุณาเลือก ---</option>');
            $.get('<?php echo base_url('admin/parents/getlistselect'); ?>').done((res) => {
                res.forEach(element => {
                    $('#parent1').append('<option value="' + element.pa_id + '">' +
                        element.n_thainame + ' ' +
                        element.pa_fnameTH + ' ' +
                        element.pa_lnameTH +
                        '</option>');
                });
            });
        }

        if (fn == 'edit') {
            $('#parent2').empty();
            $('#parent2').append('<option>--- กรุณาเลือก ---</option>');
            $.get('<?php echo base_url('admin/parents/getlistselect'); ?>').done((res) => {
                res.forEach(element => {
                    if (element.pa_id == id) {
                        $('#parent2').append('<option selected value="' + element.pa_id + '">' +
                            element.n_thainame + ' ' +
                            element.pa_fnameTH + ' ' +
                            element.pa_lnameTH +
                            '</option>');

                    } else {
                        $('#parent2').append('<option value="' + element.pa_id + '">' +
                            element.n_thainame + ' ' +
                            element.pa_fnameTH + ' ' +
                            element.pa_lnameTH +
                            '</option>');
                    }
                });
            });
        }
    }

    function fetch_expert(fn, id = null) {
        if (fn == 'add') {
            $.get('<?php echo base_url('admin/expert/getlistselect'); ?>').done((res) => {
                $('#expert1').empty();
                $('#expert1').append('<option selected="">--- กรุณาเลือก ---</option>');
                res.forEach(element => {
                    $('#expert1').append('<option value="' + element.e_id + '">' +
                        element.n_thainame + ' ' +
                        element.e_fnameTH + ' ' +
                        element.e_lnameTH +
                        '</option>');
                });
            });
        }

        if (fn == 'edit') {
            $.get('<?php echo base_url('admin/expert/getlistselect'); ?>').done((res) => {
                $('#expert2').empty();
                $('#expert2').append('<option>--- กรุณาเลือก ---</option>');
                res.forEach(element => {
                    if (element.e_id == id) {
                        $('#expert2').append('<option selected value="' + element.e_id + '">' +
                            element.n_thainame + ' ' +
                            element.e_fnameTH + ' ' +
                            element.e_lnameTH +
                            '</option>');
                    } else {
                        $('#expert2').append('<option value="' + element.e_id + '">' +
                            element.n_thainame + ' ' +
                            element.e_fnameTH + ' ' +
                            element.e_lnameTH +
                            '</option>');
                    }
                });
            });
        }
    }

    function fetch_province(type) {
        if (type == 'add') {
            $('#SelectPro1').empty();
            $('#SelectPro1').append('<option selected="">--- กรุณาเลือก ---</option>');
            $.get('<?php echo base_url('Api/Address/province'); ?>', (res) => {
                res.forEach(element => {
                    $('#SelectPro1').append('<option value="' + element.PROVINCE_ID + '">' + element.PROVINCE_NAME + '</option>')
                });
            })
        }
        if (type == 'edit') {
            $('#SelectPro2').empty();
            $('#SelectPro2').append('<option selected="">--- กรุณาเลือก ---</option>');
            $.get('<?php echo base_url('Api/Address/province'); ?>', (res) => {
                res.forEach(element => {
                    $('#SelectPro2').append('<option value="' + element.PROVINCE_ID + '">' + element.PROVINCE_NAME + '</option>')
                });
            })
        }
    }

    function fetch_amphur(type) {
        if (type == 'add') {
            var p = $('#SelectPro1').val();
            if (p == '--- กรุณาเลือก ---') {
                $('#SelectAm1').prop('disabled', true);
                $('#SelectDist1').prop('disabled', true);
                $('#SelectAm1').empty();
                $('#SelectAm1').append('<option selected="">--- กรุณาเลือก ---</option>');
                $('#SelectDist1').empty();
                $('#SelectDist1').append('<option selected="">--- กรุณาเลือก ---</option>');
            } else {
                $('#SelectAm1').empty();
                $('#SelectAm1').append('<option selected="">--- กรุณาเลือก ---</option>');
                $('#SelectAm1').prop('disabled', false);
                $('#SelectDist1').prop('disabled', true);
                $.get('<?php echo base_url('Api/Address/amphur'); ?>/' + p, (res) => {
                    res.forEach(element => {
                        $('#SelectAm1').append('<option value="' + element.AMPHUR_ID + '">' + element.AMPHUR_NAME + '</option>')
                    });
                })
            }
        }
        if (type == 'edit') {
            var p = $('#SelectPro2').val();
            if (p == '--- กรุณาเลือก ---') {
                $('#SelectAm2').prop('disabled', true);
                $('#SelectDist2').prop('disabled', true);
                $('#SelectAm2').empty();
                $('#SelectAm2').append('<option selected="">--- กรุณาเลือก ---</option>');
                $('#SelectDist2').empty();
                $('#SelectDist2').append('<option selected="">--- กรุณาเลือก ---</option>');
            } else {
                $('#SelectAm2').empty();
                $('#SelectAm2').append('<option selected="">--- กรุณาเลือก ---</option>');
                $('#SelectAm2').prop('disabled', false);
                $('#SelectDist2').prop('disabled', true);
                $.get('<?php echo base_url('Api/Address/amphur'); ?>/' + p, (res) => {
                    res.forEach(element => {
                        $('#SelectAm2').append('<option value="' + element.AMPHUR_ID + '">' + element.AMPHUR_NAME + '</option>')
                    });
                })
            }
        }
    }

    function fetch_district(type) {
        if (type == 'add') {
            var amphur = $('#SelectAm1').val();
            if (amphur == '--- กรุณาเลือก ---') {
                $('#SelectDist1').append('<option selected="">--- กรุณาเลือก ---</option>');
                $('#SelectDist1').prop('disabled', true);
            } else {
                $.get('<?php echo base_url('Api/Address/amphurById'); ?>/' + amphur, (res) => {
                    $('#Postcode1').val(res.POSTCODE);
                })
                $('#SelectDist1').prop('disabled', false);
                $('#SelectDist1').empty();
                $('#SelectDist1').append('<option selected="">--- กรุณาเลือก ---</option>');
                $.get('<?php echo base_url('Api/Address/district'); ?>/' + amphur, (res) => {
                    res.forEach(element => {
                        $('#SelectDist1').append('<option value="' + element.DISTRICT_ID + '">' + element.DISTRICT_NAME + '</option>')
                    });
                });
            }
        }
        if (type == 'edit') {
            var amphur = $('#SelectAm2').val();
            if (amphur == '--- กรุณาเลือก ---') {
                $('#SelectDist2').append('<option selected="">--- กรุณาเลือก ---</option>');
                $('#SelectDist2').prop('disabled', true);
            } else {
                $.get('<?php echo base_url('Api/Address/amphurById'); ?>/' + amphur, (res) => {
                    $('#Postcode2').val(res.POSTCODE);
                })
                $('#SelectDist2').prop('disabled', false);
                $('#SelectDist2').empty();
                $('#SelectDist2').append('<option selected="">--- กรุณาเลือก ---</option>');
                $.get('<?php echo base_url('Api/Address/district'); ?>/' + amphur, (res) => {
                    res.forEach(element => {
                        $('#SelectDist2').append('<option value="' + element.DISTRICT_ID + '">' + element.DISTRICT_NAME + '</option>')
                    });
                });
            }
        }
    }

    function addDrug() {
        var name = $('#selectDrug1 option:selected').text();
        var id = $('#selectDrug1').val();
        // console.log(name);
        // console.log("----");
        var checkAdd = drug1.includes(id);
        if (id != '--- กรุณาเลือก ---' && checkAdd != true) {
            var drug_group = document.getElementById("drug_add");
            var tag = document.createElement("div");
            tag.classList.add("mb-2");
            tag.classList.add("input-group");
            tag.id = id;
            var input = document.createElement("input");
            input.type = "text";
            input.style.fontFamily = "Kanit";
            input.classList.add("form-control");
            input.disabled = true;
            input.placeholder = name;
            var divBtn = document.createElement("div");
            divBtn.classList.add("input-group-append");
            var delBtn = document.createElement("button");
            delBtn.classList.add("btn");
            delBtn.classList.add("btn-outline-secondary");
            delBtn.type = "button";
            delBtn.onclick = function() {
                delDrug(id)
            };
            var iconDel = document.createElement("i");
            iconDel.classList.add("fas");
            iconDel.classList.add("fa-trash-alt");
            delBtn.appendChild(iconDel);
            divBtn.appendChild(delBtn);
            tag.appendChild(input);
            tag.appendChild(divBtn);
            drug_group.appendChild(tag);
            drug1.push(id);
        }
    }

    function delDrug(id) {
        $("#drug_add").children('#' + id).remove();
        var index = drug1.indexOf(id);
        delete drug1[index];
        drug1 = drug1.filter(
            function(el) {
                return el != null;
            }
        );
    }

    function addDiseased() {
        var name = $('#selectDiseased1 option:selected').text();
        var id = $('#selectDiseased1').val();
        var checkAdd = diseased1.includes(name);
        if (name != '--- กรุณาเลือก ---' && checkAdd != true) {
            var diseased_group = document.getElementById("diseased_add");
            var tag = document.createElement("div");
            tag.classList.add("mb-2");
            tag.classList.add("input-group");
            tag.id = id;
            var input = document.createElement("input");
            input.type = "text";
            input.style.fontFamily = "Kanit";
            input.classList.add("form-control");
            input.disabled = true;
            input.placeholder = name;
            var divBtn = document.createElement("div");
            divBtn.classList.add("input-group-append");
            var delBtn = document.createElement("button");
            delBtn.classList.add("btn");
            delBtn.classList.add("btn-outline-secondary");
            delBtn.type = "button";
            delBtn.onclick = function() {
                delDiseased(id)
            };
            var iconDel = document.createElement("i");
            iconDel.classList.add("fas");
            iconDel.classList.add("fa-trash-alt");
            delBtn.appendChild(iconDel);
            divBtn.appendChild(delBtn);
            tag.appendChild(input);
            tag.appendChild(divBtn);
            diseased_group.appendChild(tag);
            diseased1.push(id);
        }
    }

    function delDiseased(name) {
        $("#diseased_add").children('#' + name).remove();
        var index = diseased1.indexOf(name);
        delete diseased1[index];
        diseased1 = diseased1.filter(
            function(el) {
                return el != null;
            }
        );
    }

    function updateDrug() {
        var name = $('#selectDrug2 option:selected').text();
        var id = $('#selectDrug2').val();
        var checkAdd = drug2.includes(id);
        if (name != '--- กรุณาเลือก ---' && checkAdd != true) {
            var drug_group = document.getElementById("drug_update");
            var tag = document.createElement("div");
            tag.classList.add("mb-2");
            tag.classList.add("input-group");
            tag.id = id;
            var input = document.createElement("input");
            input.type = "text";
            input.style.fontFamily = "Kanit";
            input.classList.add("form-control");
            input.disabled = true;
            input.placeholder = name;
            var divBtn = document.createElement("div");
            divBtn.classList.add("input-group-append");
            var delBtn = document.createElement("button");
            delBtn.classList.add("btn");
            delBtn.classList.add("btn-outline-secondary");
            delBtn.type = "button";
            delBtn.onclick = function() {
                delDrugUpdate(id)
            };
            var iconDel = document.createElement("i");
            iconDel.classList.add("fas");
            iconDel.classList.add("fa-trash-alt");
            delBtn.appendChild(iconDel);
            divBtn.appendChild(delBtn);
            tag.appendChild(input);
            tag.appendChild(divBtn);
            drug_group.appendChild(tag);
            drug2.push(id);
        }
    }

    function delDrugUpdate(name) {
        $("#drug_update").children('#' + name).remove();
        var index = drug2.indexOf(name);
        delete drug2[index];
        drug2 = drug2.filter(
            function(el) {
                return el != null;
            }
        );
    }

    function updateDiseased() {
        var name = $('#selectDiseased2 option:selected').text();
        var id = $('#selectDiseased2').val();

        var checkAdd = diseased2.includes(id);
        if (name != '--- กรุณาเลือก ---' && checkAdd != true) {
            var diseased_group = document.getElementById("diseased_update");
            var tag = document.createElement("div");
            tag.classList.add("mb-2");
            tag.classList.add("input-group");
            tag.id = id;
            var input = document.createElement("input");
            input.type = "text";
            input.style.fontFamily = "Kanit";
            input.classList.add("form-control");
            input.disabled = true;
            input.placeholder = name;
            var divBtn = document.createElement("div");
            divBtn.classList.add("input-group-append");
            var delBtn = document.createElement("button");
            delBtn.classList.add("btn");
            delBtn.classList.add("btn-outline-secondary");
            delBtn.type = "button";
            delBtn.onclick = function() {
                delDiseasedUpdate(id)
            };
            var iconDel = document.createElement("i");
            iconDel.classList.add("fas");
            iconDel.classList.add("fa-trash-alt");
            delBtn.appendChild(iconDel);
            divBtn.appendChild(delBtn);
            tag.appendChild(input);
            tag.appendChild(divBtn);
            diseased_group.appendChild(tag);
            diseased2.push(id);
        }
    }

    function delDiseasedUpdate(name) {
        $("#diseased_update").children('#' + name).remove();
        var index = diseased2.indexOf(name);
        delete diseased2[index];
        diseased2 = diseased2.filter(
            function(el) {
                return el != null;
            }
        );
    }

    function autoAddressByParent(fn) {
        if (fn == 'add') {
            var parent = $('#parent1').val();
            $.get('<?php echo base_url('admin/parents/getById'); ?>/' + parent).done((res) => {
                fetch_AddAddress(res.pa_district, res.pa_province, res.pa_amphur);
                $('#HouseNo1').val(res.pa_house_no);
                $('#VillageNo1').val(res.pa_village_no);
                $('#Road1').val(res.pa_road);
            });
        }
        if (fn == 'edit') {
            var parent = $('#parent2').val();
            $.get('<?php echo base_url('admin/parents/getById'); ?>/' + parent).done((res) => {
                fetch_editAddress(res.pa_district, res.pa_province, res.pa_amphur);
                $('#HouseNo2').val(res.pa_house_no);
                $('#VillageNo2').val(res.pa_village_no);
                $('#Road2').val(res.pa_road);
            });
        }
    }
</script>
<!-- datatable -->
<script>
    $("#children").DataTable({
        "processing": true,
        "autoWidth": false,
        "responsive": {
            details: {
                type: 'column'
            }
        },
        "ajax": {
            url: "<?php echo base_url('admin/children/getAll'); ?>",
            type: "GET"
        },
        "order": [
            [2, "asc"]
        ],
        "columns": [{
                data: null,
                width: 30,
                className: 'dtr-control',
                orderable: false,
                "defaultContent": ''
            },
            {
                "data": null,
                'orderable': false,
                "render": (data, type, row, meta) => {
                    return `
                            <label for="toggle-` + row.c_id + `" class="toggle-1">
                                <input type="checkbox" id="toggle-` + row.c_id + `" 
                                class="toggle-1__input"  ` + (row.c_status == 1 ? 'checked' : '') + `
                                onchange="onClickActivate(` + row.c_id + `)">
                                <span class="toggle-1__button"></span>
                            </label>
                        `;
                },
            },
            {
                "data": null,
                className: "td_text",
                "render": (data, type, row, meta) => {
                    return meta.row + 1;
                }
            },
            {
                "data": "c_id",
                className: "td_text"
            },
            {
                data: null,
                className: "td_text",
                render: (data, type, row, meta) => {
                    return row.n_thainame + ' ' + row.c_fnameTH + ' ' + row.c_lnameTH
                }
            },
            {
                "data": "tc_name",
                className: "td_text"
            },
            {
                "data": 'sc_nameTH',
                className: "td_text"
            },
            {
                "data": "date",
                className: "td_text"
            },
            {
                "data": null,
                className: "td_text",
                render: (data, type, row, meta) => {
                    return (row.c_house_no == '' ? ' - ' : row.c_house_no) + ' หมู่ ' +
                        (row.c_village_no == '' ? ' - ' : row.c_village_no) + ' ถนน ' +
                        row.c_road + ' จังหวัด ' + row.PROVINCE_NAME + ' ตำบล ' + row.DISTRICT_NAME +
                        ' อำเภอ ' + row.AMPHUR_NAME + row.POSTCODE;
                }
            },
            {
                "data": null,
                "render": (data, type, row, meta) => {
                    return `
                        <button class="btn btn-flat" style="padding: 2px .75rem; color: #199a6f;" data-toggle="modal" data-target="#editChildren"
                        onclick="onClickEdit(` + row.c_id + `)"><i class="fa fa-edit"></i>
                        </button>
                        `;
                }
            }
        ]
    });
</script>
<script>
    var path_image = null;
    $(document).on("click", ".cardUser", function() {
        $('.toggle').css("width", "100px");
    });
    //*********start datepickker************ */
    var now = new Date();
    var duedate = new Date(now);
    var befor1Year = new Date(duedate.setDate(now.getDate() - 365));
    $('#datepicker1').datepicker({
        format: 'dd/mm/yyyy',
        maxDate: befor1Year,
        uiLibrary: 'bootstrap4'
    });
    $('#datepicker2').datepicker({
        format: 'dd/mm/yyyy',
        maxDate: befor1Year,
        uiLibrary: 'bootstrap4',
    });
    //*********start chooseImg************ */
    /*** choose IMG for insert ****/
    $(document).on("click", "#browse1", function() {
        var file = $(this).parents().find(".file1");
        file.trigger("click");
    });
    $('#inputFile1').change(function(e) {
        var fileName = e.target.files[0].name;
        var file = e.target.files[0];
        $("#file1").val(fileName);
        var allowedExtensions =
            /(\.jpg|\.jpeg|\.png|\.gif)$/i;
        if (!allowedExtensions.exec(fileName)) {
            alert('Invalid file type');
            $("#file1").val('');
            $("#preview1").attr("src", "<?php echo base_url(); ?>assets/images/admin/DefualtUser.png");
            return false;
        } else {
            if (file) {
                if (e.target.files[0].size <= 2000000) {

                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById("preview1").src = e.target.result;
                    };
                    reader.readAsDataURL(this.files[0]);

                    var formData = new FormData();
                    formData.append('file', file);
                    $.ajax({
                        url: '<?php echo base_url('admin/children/storeImage'); ?>',
                        type: "post",
                        data: formData,
                        processData: false,
                        contentType: false,
                        cache: false,
                        async: true,
                        success: (res) => {
                            path_image = 'upload/images/' + res.image_metadata.file_name
                            console.log(path_image);
                        }
                    });
                } else {
                    $("#file1").val('');
                    alert('ขนาดรูปภาพต้องไม่เกิน 2 mb');
                    return false;
                }
            }
        }
    });
    /*** choose IMG for update ****/
    $(document).on("click", "#browse2", function() {
        var file = $(this).parents().find(".file2");
        file.trigger("click");
    });
    $('#inputFile2').change(function(e) {
        var fileName = e.target.files[0].name;
        var file = e.target.files[0];
        $("#file1").val(fileName);
        var allowedExtensions =
            /(\.jpg|\.jpeg|\.png|\.gif)$/i;
        if (!allowedExtensions.exec(fileName)) {
            alert('Invalid file type');
            $("#file2").val('');
            $("#preview2").attr("src", "<?php echo base_url(); ?>assets/images/admin/DefualtUser.png");
            return false;
        } else {
            if (file) {
                if (e.target.files[0].size <= 2000000) {

                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById("preview2").src = e.target.result;
                    };
                    reader.readAsDataURL(this.files[0]);

                    var formData = new FormData();
                    formData.append('file', file);
                    $.ajax({
                        url: '<?php echo base_url('admin/children/storeImage'); ?>',
                        type: "post",
                        data: formData,
                        processData: false,
                        contentType: false,
                        cache: false,
                        async: true,
                        success: (res) => {
                            path_image = 'upload/images/' + res.image_metadata.file_name
                        }
                    });
                } else {
                    $("#file2").val('');
                    alert('ขนาดรูปภาพต้องไม่เกิน 2 mb');
                    return false;
                }
            }
        }
    });
    //********end chooseImg************* */

    function update_drug(user_id, list) {
        $.post('<?php echo base_url('admin/children/storeDrug') ?>/' + user_id, {
            drug: list
        }).done((res) => {
            console.log(res);
        });
    }

    function update_diseased(user_id, list) {
        $.post('<?php echo base_url('admin/children/storeDiseased') ?>/' + user_id, {
            diseased: list
        }).done((res) => {
            console.log(res);
        });
    }

    function onClickSave(func) {
        var checkError = true;
        if (func == 'insert') {
            var prenameTH1 = document.getElementById("prenameTH1").value;
            var fnameTH1 = document.getElementById("fnameTH1").value;
            var lnameTH1 = document.getElementById("lnameTH1").value;
            var prenameEN1 = document.getElementById("prenameEN1").value;
            var fnameEN1 = document.getElementById("fnameEN1").value;
            var lnameEN1 = document.getElementById("lnameEN1").value;
            var birthday1 = document.getElementById("datepicker1").value;
            var tc1 = document.getElementById("tc1").value;
            var parent1 = document.getElementById("parent1").value;
            var expert1 = document.getElementById("expert1").value;
            var school1 = document.getElementById("school1").value;
            var SelectPro1 = document.getElementById("SelectPro1").value;
            var SelectAm1 = document.getElementById("SelectAm1").value;
            var SelectDist1 = document.getElementById("SelectDist1").value;
            if (prenameTH1 == '--- กรุณาเลือก ---') {
                document.getElementById("erprenameTH1").style.display = "block";
                document.getElementById("prenameTH1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erprenameTH1").style.display = "none";
                document.getElementById("prenameTH1").style.border = "2px solid #ced4da";
            }
            if (fnameTH1 == '') {
                document.getElementById("erfnameTH1").style.display = "block";
                document.getElementById("fnameTH1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erfnameTH1").style.display = "none";
                document.getElementById("fnameTH1").style.border = "2px solid #ced4da";
            }
            if (lnameTH1 == '') {
                document.getElementById("erlnameTH1").style.display = "block";
                document.getElementById("lnameTH1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erlnameTH1").style.display = "none";
                document.getElementById("lnameTH1").style.border = "2px solid #ced4da";
            }
            if (prenameEN1 == '--- กรุณาเลือก ---') {
                document.getElementById("erprenameEN1").style.display = "block";
                document.getElementById("prenameEN1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erprenameEN1").style.display = "none";
                document.getElementById("prenameEN1").style.border = "2px solid #ced4da";
            }
            if (fnameEN1 == '') {
                document.getElementById("erfnameEN1").style.display = "block";
                document.getElementById("fnameEN1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erfnameEN1").style.display = "none";
                document.getElementById("fnameEN1").style.border = "2px solid #ced4da";
            }
            if (lnameEN1 == '') {
                document.getElementById("erlnameEN1").style.display = "block";
                document.getElementById("lnameEN1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erlnameEN1").style.display = "none";
                document.getElementById("lnameEN1").style.border = "2px solid #ced4da";
            }

            if (birthday1 == 'วัน/เดือน/ปี' || birthday1 == '') {
                document.getElementById("erdatepicker1").style.display = "block";
                document.getElementById("datepicker1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                birthday1 = document.getElementById("datepicker1").value;
                var splitBD = birthday1.split('/');
                var currentDate = new Date();
                var dateSelect = new Date(splitBD[1] + "/" + splitBD[0] + "/" + splitBD[2]);
                if (dateSelect >= currentDate) {
                    document.getElementById("erdatepicker1").style.display = "block";
                    document.getElementById("datepicker1").style.border = "2px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erdatepicker1").style.display = "none";
                    document.getElementById("datepicker1").style.border = "2px solid #ced4da";
                }
            }
            if (tc1 == '--- กรุณาเลือก ---') {
                document.getElementById("ertc1").style.display = "block";
                document.getElementById("tc1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("ertc1").style.display = "none";
                document.getElementById("tc1").style.border = "2px solid #ced4da";
            }
            if (parent1 == '--- กรุณาเลือก ---') {
                document.getElementById("erparent1").style.display = "block";
                document.getElementById("parent1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erparent1").style.display = "none";
                document.getElementById("parent1").style.border = "2px solid #ced4da";
            }
            if (expert1 == '--- กรุณาเลือก ---') {
                document.getElementById("erexpert1").style.display = "block";
                document.getElementById("expert1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erexpert1").style.display = "none";
                document.getElementById("expert1").style.border = "2px solid #ced4da";
            }
            if (school1 == '--- กรุณาเลือก ---') {
                document.getElementById("erschool1").style.display = "block";
                document.getElementById("school1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erschool1").style.display = "none";
                document.getElementById("school1").style.border = "2px solid #ced4da";
            }
            if (SelectPro1 == "--- กรุณาเลือก ---") {
                document.getElementById("erSelectPro1").style.display = "block";
                document.getElementById("SelectPro1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erSelectPro1").style.display = "none";
                document.getElementById("SelectPro1").style.border = "2px solid #ced4da";
            }
            if (SelectAm1 == "--- กรุณาเลือก ---") {
                document.getElementById("erSelectAm1").style.display = "block";
                document.getElementById("SelectAm1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erSelectAm1").style.display = "none";
                document.getElementById("SelectAm1").style.border = "2px solid #ced4da";
            }
            if (SelectDist1 == "--- กรุณาเลือก ---") {
                document.getElementById("erSelectDist1").style.display = "block";
                document.getElementById("SelectDist1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erSelectDist1").style.display = "none";
                document.getElementById("SelectDist1").style.border = "2px solid #ced4da";
            }

            if (checkError == true) {
                /********insert**********/
                var HouseNo = document.getElementById("HouseNo1").value;
                var VillageNo = document.getElementById("VillageNo1").value;
                var Road = document.getElementById("Road1").value;
                var Postcode = document.getElementById("Postcode1").value;
                $.post('<?php echo base_url('admin/children/create'); ?>', {
                    c_prename: prenameTH1,
                    c_fnameTH: fnameTH1,
                    c_lnameTH: lnameTH1,
                    c_fnameEN: fnameEN1,
                    c_lnameEN: lnameEN1,
                    tc_id: tc1,
                    school_id: school1,
                    c_parent_id: parent1,
                    c_expert_id: expert1,
                    date: birthday1,
                    c_house_no: HouseNo,
                    c_village_no: VillageNo,
                    c_road: Road,
                    c_province: SelectPro1,
                    c_district: SelectDist1,
                    c_amphur: SelectAm1,
                    c_zip: Postcode,
                    c_img: path_image != null ? path_image : 'assets/images/admin/DefualtUser.png',
                }).done((res) => {
                    update_drug(res.insert_id, drug1);
                    update_diseased(res.insert_id, diseased1);
                    $('#insertChildren').modal('hide');
                    toastr.success('เพิ่มข้อมูลสำเร็จ');
                }).fail((xhr, status, error) => {
                    toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง');
                });
                console.log('Start Insert');
            }
        } else if (func == 'edit') {
            var prenameTH2 = document.getElementById("prenameTH2").value;
            var fnameTH2 = document.getElementById("fnameTH2").value;
            var lnameTH2 = document.getElementById("lnameTH2").value;
            var prenameEN2 = document.getElementById("prenameEN2").value;
            var fnameEN2 = document.getElementById("fnameEN2").value;
            var lnameEN2 = document.getElementById("lnameEN2").value;
            var birthday2 = document.getElementById("datepicker2").value;
            var tc2 = document.getElementById("tc2").value;
            var parent2 = document.getElementById("parent2").value;
            var expert2 = document.getElementById("expert2").value;
            var school2 = document.getElementById("school2").value;
            var SelectPro2 = document.getElementById("SelectPro2").value;
            var SelectAm2 = document.getElementById("SelectAm2").value;
            var SelectDist2 = document.getElementById("SelectDist2").value;
            if (prenameTH2 == '--- กรุณาเลือก ---') {
                document.getElementById("erprenameTH2").style.display = "block";
                document.getElementById("prenameTH2").style.border = "2px solid #bd2230";
                checkError = false;
            } else {
                document.getElementById("erprenameTH2").style.display = "none";
                document.getElementById("prenameTH2").style.border = "2px solid #ced4da";
            }
            if (fnameTH2 == '') {
                document.getElementById("erfnameTH2").style.display = "block";
                document.getElementById("fnameTH2").style.border = "2px solid #bd2230";
                checkError = false;
            } else {
                document.getElementById("erfnameTH2").style.display = "none";
                document.getElementById("fnameTH2").style.border = "2px solid #ced4da";
            }
            if (lnameTH2 == '') {
                document.getElementById("erlnameTH2").style.display = "block";
                document.getElementById("lnameTH2").style.border = "2px solid #bd2230";
                checkError = false;
            } else {
                document.getElementById("erlnameTH2").style.display = "none";
                document.getElementById("lnameTH2").style.border = "2px solid #ced4da";
            }
            if (prenameEN2 == '--- กรุณาเลือก ---') {
                document.getElementById("erprenameEN2").style.display = "block";
                document.getElementById("prenameEN2").style.border = "2px solid #bd2230";
                checkError = false;
            } else {
                document.getElementById("erprenameEN2").style.display = "none";
                document.getElementById("prenameEN2").style.border = "2px solid #ced4da";
            }
            if (fnameEN2 == '') {
                document.getElementById("erfnameEN2").style.display = "block";
                document.getElementById("fnameEN2").style.border = "2px solid #bd2230";
                checkError = false;
            } else {
                document.getElementById("erfnameEN2").style.display = "none";
                document.getElementById("fnameEN2").style.border = "2px solid #ced4da";
            }
            if (lnameEN2 == '') {
                document.getElementById("erlnameEN2").style.display = "block";
                document.getElementById("lnameEN2").style.border = "2px solid #bd2230";
                checkError = false;
            } else {
                document.getElementById("erlnameEN2").style.display = "none";
                document.getElementById("lnameEN2").style.border = "2px solid #ced4da";
            }
            if (birthday2 == 'วัน/เดือน/ปี' || birthday2 == '') {
                document.getElementById("erdatepicker2").style.display = "block";
                document.getElementById("datepicker2").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                birthday2 = document.getElementById("datepicker2").value;
                var splitBD = birthday2.split('/');
                var currentDate = new Date();
                var dateSelect = new Date(splitBD[1] + "/" + splitBD[0] + "/" + splitBD[2]);
                console.log(currentDate);
                console.log(dateSelect);
                if (dateSelect >= currentDate) {
                    document.getElementById("erdatepicker2").style.display = "block";
                    document.getElementById("datepicker2").style.border = "2px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erdatepicker2").style.display = "none";
                    document.getElementById("datepicker2").style.border = "2px solid #ced4da";
                }
            }
            if (tc2 == '--- กรุณาเลือก ---') {
                document.getElementById("ertc2").style.display = "block";
                document.getElementById("tc2").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("ertc2").style.display = "none";
                document.getElementById("tc2").style.border = "2px solid #ced4da";
            }
            if (parent2 == '--- กรุณาเลือก ---') {
                document.getElementById("erparent2").style.display = "block";
                document.getElementById("parent2").style.border = "2px solid #bd2230";
                checkError = false;
            } else {
                document.getElementById("erparent2").style.display = "none";
                document.getElementById("parent2").style.border = "2px solid #ced4da";
            }
            if (expert2 == '--- กรุณาเลือก ---') {
                document.getElementById("erexpert2").style.display = "block";
                document.getElementById("expert2").style.border = "2px solid #bd2230";
                checkError = false;
            } else {
                document.getElementById("erexpert2").style.display = "none";
                document.getElementById("expert2").style.border = "2px solid #ced4da";
            }
            if (school2 == '--- กรุณาเลือก ---') {
                document.getElementById("erschool2").style.display = "block";
                document.getElementById("school2").style.border = "2px solid #bd2230";
                checkError = false;
            } else {
                document.getElementById("erschool2").style.display = "none";
                document.getElementById("school2").style.border = "2px solid #ced4da";
            }
            if (SelectPro2 == "--- กรุณาเลือก ---") {
                document.getElementById("erSelectPro2").style.display = "block";
                document.getElementById("SelectPro2").style.border = "2px solid #bd2230";
                checkError = false;
            } else {
                document.getElementById("erSelectPro2").style.display = "none";
                document.getElementById("SelectPro2").style.border = "2px solid #ced4da";
            }
            if (SelectAm2 == "--- กรุณาเลือก ---") {
                document.getElementById("erSelectAm2").style.display = "block";
                document.getElementById("SelectAm2").style.border = "2px solid #bd2230";
                checkError = false;
            } else {
                document.getElementById("erSelectAm2").style.display = "none";
                document.getElementById("SelectAm2").style.border = "2px solid #ced4da";
            }
            if (SelectDist2 == "--- กรุณาเลือก ---") {
                document.getElementById("erSelectDist2").style.display = "block";
                document.getElementById("SelectDist2").style.border = "2px solid #bd2230";
                checkError = false;
            } else {
                document.getElementById("erSelectDist2").style.display = "none";
                document.getElementById("SelectDist2").style.border = "2px solid #ced4da";
            }

            if (checkError == true) {
                /********insert**********/
                var id_user = $('.edit_btn').attr('id');
                var HouseNo = document.getElementById("HouseNo2").value;
                var VillageNo = document.getElementById("VillageNo2").value;
                var Road = document.getElementById("Road2").value;
                var Postcode = document.getElementById("Postcode2").value;
                $.post('<?php echo base_url('admin/children/update'); ?>/' + id_user, {
                    c_prename: prenameTH2,
                    c_fnameTH: fnameTH2,
                    c_lnameTH: lnameTH2,
                    c_fnameEN: fnameEN2,
                    c_lnameEN: lnameEN2,
                    tc_id: tc2,
                    school_id: school2,
                    c_parent_id: parent2,
                    c_expert_id: expert2,
                    date: birthday2,
                    c_house_no: HouseNo,
                    c_village_no: VillageNo,
                    c_road: Road,
                    c_province: SelectPro2,
                    c_district: SelectDist2,
                    c_amphur: SelectAm2,
                    c_zip: Postcode,
                    c_img: path_image != null ? path_image : 'assets/images/admin/DefualtUser.png',
                }).done((res) => {
                    update_drug(id_user, drug2);
                    update_diseased(id_user, diseased2);
                    $('#editChildren').modal('hide');
                    toastr.success('เพิ่มข้อมูลสำเร็จ');
                }).fail((xhr, status, error) => {
                    toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง');
                });
                console.log('Start edit');
            }
        }
    }
</script>