<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script>
        function verifyPassword() {
            var pw = document.getElementById("pswd").value;
            var cpw = document.getElementById("cpw").value;
            //check empty password field
            if (pw != cpw) {
                alert("Password & Confirm Password dosen't match");
                return false;
            } else {
                return true;
            }
        }
    </script>
</head>
<div class="container" style="margin-top: 5%">
    <form method="post" class='form-horizontal' action="{{ route('user.store') }}" onsubmit="return verifyPassword()">
        @csrf
        <article class="card">
            <section class="card-header">
                <div class="row">
                    <div class="col-10">
                        <h4 class="card-title">
                            User <small class="text-muted mode_label">Create</small>
                        </h4>
                    </div>
                    <!--col-->
                    <aside class="col-2 float-right">
                        <button class="btn btn-danger" role="toolbar" aria-label="Toolbar with button groups">
                            <a href="{{ url()->previous() }}" data-toggle="tooltip" title="Add New">Back</i></a>
                        </button>
                    </aside>
                    <!--col-->
                </div>
                <!--card-header-actions-->
            </section>
            <!--card-header-->

            <section class="card-body">

                <div class="form-group row mt-2">
                    <label for="name" class="col-sm-2 col-form-label text-lg-right">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" placeholder="Name" required />
                        @error('name')
                            <span class="text-danger error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="email" class="col-sm-2 col-form-label text-lg-right">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" placeholder="Email" required />
                        @error('email')
                            <span class="text-danger error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="number" class="col-sm-2 col-form-label text-lg-right">Phone</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="number" placeholder="Phone" required />
                        @error('number')
                            <span class="text-danger error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="address" class="col-sm-2 col-form-label text-lg-right">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="address" placeholder="Address" required />
                        @error('address')
                            <span class="text-danger error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="password" class="col-sm-2 col-form-label text-lg-right">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="pswd" name="password"
                            placeholder="Password" required />
                        @error('password')
                            <span class="text-danger error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="co_password" class="col-sm-2 col-form-label text-lg-right">Confirm Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="cpw" name="co_password"
                            placeholder="Confirm Password" required />
                        @error('co_password')
                            <span class="text-danger error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </section>
            <!--card-body-->
            <section class="card-footer">
                <div class="row">
                    <div class="col-sm-10">
                    </div>
                    <div class="col-sm-2 text-right">
                        <button type="reset" class="btn btn-danger btn_reset" type="reset">Reset</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            </section>
            <!--card-footer-->
        </article>
        <!--card-->
    </form>

</div>

</html>
