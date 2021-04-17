<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست دسته بندی های سایت
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th> عنوان دسته بندی</th>
                    <th> ترتیب نمایش </th>
                    <th> وضعیت </th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    $listmenu=listproduct_cat();
                    foreach ($listmenu as $val):
                    ?>
                    <tr>
                        <td><?php echo $val['title'];?></td>
                        <td><?php echo $val['sort'];?></td>
                        <td>
                            <?php 
                            if ($val['status']==0){
                            echo "
                            <span class='btn btn-danger' >غیرفعال <span/>
                            ";
                            }
                            else{
                                echo"
                                <span class='btn btn-success' > فعال <span/>
                                ";
                            }
                            ?>
                        </td>
                        <td><a href="dashbord.php?m=product&p=edit&id=<?php echo $val['id'];?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a></td>
                        <td><a href="dashbord.php?m=product&p=delete&id=<?php echo $val['id'];?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                    </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </section>
    </div>
</div>
