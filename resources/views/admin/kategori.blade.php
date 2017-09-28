@extends('admin.base')
@section('content')
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Kategori</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Kategori</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="white-box analytics-info">
                    <form id="frmkategori" class="form-horizontal" autocomplete="off">
                         <div class="form-group">
                            <label for="Kategori" class="control-label">Kategori</label>
                            <input type="text" class="form-control" name="kategori" id="Kategori">
                         </div>
                         <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Save">
                         </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="white-box analytics-info">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="tableKategroi">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
    <script>
        $(document).ready(function(){
            getKategori();
            $('#frmkategori').submit(function(){
                var x = 0;
                $("#frmkategori input").each(function(){
                    if($(this).val() == ""){
                        x++;
                    }
                });
                if(x != 0){
                    msgToast('Form Required','warning','warning','#fff');
                }else{
                    submitAjax("#frmkategori");
                }
                return false;
            });
        });
        function getKategori(){
            $.get('getKategori', function(data){
                $("#tableKategroi tbody").html(data);
            });
        }
        function submitAjax(frm){
             var data = $(frm).serializeArray();
             data.push({name:"_token",value:"<?php echo csrf_token();?>"});
            $.post('saveKategori',data,function(res){
                if(res.response == "OK"){
                    msgToast('Insert Successfully','Info','success','#eee');
                    getKategori();
                    $(frm).get(0).reset();
                }
            },'json');
            return false;
        }
        function msgToast(msg,headingText,type,bg){
            $.toast({
                 heading: headingText,
                 text: msg,
                 position: 'top-center',
                 loaderBg: bg,
                 icon: type,
                 hideAfter: 3500,
                 stack: 6
            });
        }
    </script>
@endsection            