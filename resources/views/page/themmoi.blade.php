@extends("layout")
@section("main")
    <Main id="Main">
    <div class="main-form">
        <div class=" aaa">
            <div class="forms">
                <h1>Thêm Sản Phẩm</h1>
                <form action="#" method="POST">
                    <div class="forms-1">
                        <div class="form-group form1">
                            <label>Tên SP:</label>
                            <input type="text" class="ipf" id="name" placeholder="Tên sản phẩm.." name="ten" required>
                        </div>
                        <div class="form-group form1">
                            <label for="class">Giá:</label>
                            <input type="text" class="ipf" id="class" placeholder="Giá.." name="gia" required>
                        </div>
                        <div class="form-group form1">
                            <label for="address">Mô tả:</label>
                            <input type="text" class="ipf" id="address" placeholder="Mô tả.." name="mota" required>
                        </div>
                        <div class="form-group form1">
                            <label>Tên NCC:</label>
                            <input type="text" class="ipf" id="number"  placeholder="Tên nhà cung cấp.." name="tenncc" required>
                        </div>
                        <button type="submit" name="dangky">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</Main>
@endsection
