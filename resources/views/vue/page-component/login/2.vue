<template>
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black d-flex justify-content-center">
                    <div>
                        <i
                            class="fa fa-users  fa-2x me-3 pt-5 "
                            style="color: #709085"
                        ></i>
                        <span class="h1 fw-bold mb-0">Logo</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <form>
                            <h3 class="mb-3 pb-3">Log in</h3>

                            <div class="form-outline mb-4">
                                <input
                                    type="email"
                                    id="form2Example18"
                                    class="form-control form-control-lg"
                                />
                                <label class="form-label" for="form2Example18"
                                    >Email address</label
                                >
                            </div>

                            <div class="form-outline mb-4">
                                <input
                                    type="password"
                                    id="form2Example28"
                                    class="form-control form-control-lg"
                                />
                                <label class="form-label" for="form2Example28"
                                    >Password</label
                                >
                            </div>

                            <div class="pt-1 mb-4">
                                <button
                                    class="btn btn-info btn-lg btn-block"
                                    type="button"
                                >
                                    Login
                                </button>
                            </div>

                            <p class="small mb-5 pb-lg-2">
                                <a class="text-muted" href="#!"
                                    >Forgot password?</a
                                >
                            </p>
                            <p>
                                Don't have an account?
                                <a href="#!" class="link-info">Register here</a>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block position-relative" >
                    <div class="position-absolute" style="top:50%; transform: translateY(-50%); left: 5%;">
                        <h1>Helo ABC</h1>
                    </div>
                    <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp"
                        alt="Login image"
                        class="w-100 vh-100"
                        style="object-fit: cover; object-position: left"
                    />
                </div>
            </div>
        </div>
    </section>
</template>
