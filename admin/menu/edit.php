<?php
$id=$_GET['id'];
if(isset($_POST['btn'])){
    $data=$_POST["frm"];
    editmenu($data,$id);
}
$data=showmenu($id);
?>
<h1 class="pageLables">ویرایش منو</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                 ویرایش منوی سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان منو</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان منو را وارد کنید"
                            value='<?php echo $data['title'] ?>'>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">آدرس منو</label>
                        <input type="text" name="frm[url]" class="form-control" placeholder="لینک منو مورد نظر را وارد کنید"
                               value='<?php echo $data['url'] ?>'>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">سرگروه</label>
                        <select class="form-control input-lg m-bot15" name="frm[parent]">
                            <option value="0">سرگروه </option>
                            <?php
                            $submenu=submenu();
                            foreach ($submenu as $subs){
                                echo "<option value=\"$subs[id]\" ";
                                    
                                   if($data['chid']==$subs['id']){echo " selected";}
                                    
                                   echo "> $subs[title] </option>";
                            }
                            ?>
                        </select>
                    </div>
                    <label for="exampleInputPassword1">وضعیت نمایش</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]" id="optionsRadios1" value="1" <?php if($data['status']==1){echo "checked";} ?> >فعال
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]" id="optionsRadios1" value="0" <?php if($data['status']==0){echo "checked";} ?> > غیر فعال
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ترتیب نمایش</label>
                        <input type="text" name="frm[sort]" class="form-control" placeholder="ترتیب نمایش" value="<?php echo $data['sort'] ?>">
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">اعمال تغییرات</button>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            فلام بسار

                        </label>
                    </div>
                </form>


            </div>
        </section>
    </div>
</div>

