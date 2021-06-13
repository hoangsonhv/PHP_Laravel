@extends("layout")
@section("main")
<Main id="Main">
    <div class="main-form">
        <div class="aaa">
            <div class="forms">
                <h1>Thêm Loại Sản Phẩm</h1>
                <form action="#" method="POST">
                    <div class="forms-1">
                        <div class="form-group form1">
                            <label>Tên SP:</label>
                            <input type="text" class="ipf" id="name" placeholder="Tên Loại sản phẩm.." name="tenloai" required>
                        </div>
                        <div class="form-group form1">
                            <label for="class">Giá:</label>
                            <input type="text" class="ipf" id="class" placeholder="Số lượng.." name="soluong" required>
                        </div>
                        <button type="submit">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</Main>
@endsection
