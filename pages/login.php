<div class="container">
    <div class="row">
        <div class="col-12">
            <section id="login" class="section-gap">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="coffee-content pb-5 col-lg-10">
                            <div class="title text-center">
                                <h1 class="mb-10">Sign In</h1>
                            </div>
                        </div>
                    </div>
                    <form action="/" method="post" class="row d-flex align-items-center justify-content-center">
                        <input type="hidden" name="type" value="login"/>
                        <div class="col-md-6 picture d-flex align-items-center justify-content-center">
                            <div class="overlay"></div>
                        </div>
                        <div class="col-md-6 p-5">
                            <div class="mb-3">
                                <label for="InputEmail" class="form-label">Email address</label>
                                <input type="text" class="form-control" id="InputEmail"
                                       aria-describedby="emailHelp" name="email" placeholder="example@email.com"
                                       value="<?=$_SESSION['login']['fields']['email'] ?? null?>"
                                       required>
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone
                                    else.
                                </div>
                                <?php formError($_SESSION['login']['errors']['email'] ?? null)?>
                            </div>
                            <div class="mb-3">
                                <label for="InputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="InputPassword" name="password" required>
                                <?php formError($_SESSION['login']['errors']['password'] ?? null)?>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-outline-primary form-control">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
