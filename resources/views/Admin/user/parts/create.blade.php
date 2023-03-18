


<form id="addForm" class="addForm" method="POST" enctype="multipart/form-data" action="{{route('users.store')}}">
    @csrf
    <div class="form-group">
        <label for="image" class="form-control-label">الصورة</label>
        <input type="file" class="dropify" name="image" accept="image/png, image/gif, image/jpeg,image/jpg"/>
        <span class="form-text text-danger text-center">مسموح بالصيغ الاتية png, gif, jpeg, jpg</span>
    </div>
    <div class="row">

        <div class="col-6">
            <div class="form-group">
                <label for="btn_title_ar" class="form-control-label">اسم المستخدم</label>
                <input type="text" class="form-control" name="user_name">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="btn_title_ar" class="form-control-label">النقاط</label>
                <input type="number" class="form-control" name="balance">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="btn_title_en" class="form-control-label">الايميل</label>
                <input type="text" class="form-control" name="email">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label for="btn_link" class="form-control-label">الرقم السري</label>
                <input type="password" class="form-control" name="password" placeholder="******">
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
        <button type="submit" class="btn btn-primary" id="addButton">اضافة</button>
    </div>
</form>
<script>
    $('.dropify').dropify()
</script>

