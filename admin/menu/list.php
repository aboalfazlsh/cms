<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست منو های اصلی وب سایت
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th> نام محصول</th>
                    <th> دسته بندی</th>
                    <th>تصویر </th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    $listmenu=listmenuadmin();
                    foreach ($listmenu as $val):
                    ?>
                    <tr>
                        <td><?php echo $val['title'];?></td>
                        <td><?php
                            if($val['chid']==0){
                             echo "ندارد";
                            }
                            else{
                                $parent=selectparentmenu($val['chid']);
                                echo $parent;
                            }
                        ?></td>
                        <td><?php echo $val['url'];?></td>
                        <td><?php echo $val['sort'];?></td>
                        <td><a href="dashbord.php?m=product&p=edit&id=" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a></td>
                        <td><a href="dashbord.php?m=menu&p=delete&id=<?php echo $val['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                    </tr>
                    <?php
                    endforeach;
                    ?>

                </tbody>
            </table>
        </section>
    </div>
</div>
