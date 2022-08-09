<div class="container">
    <div class="row">
        <div class="col-12">
            <section id="register" class="section-gap">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="coffee-content pb-5 col-lg-10">
                            <div class="title text-center">
                                <h1 class="mb-10">Create an account</h1>
                            </div>
                        </div>
                    </div>
                    <form action="/" method="post" class="row d-flex align-items-center justify-content-center">
                        <input type="hidden" name="type" value="register"/>
                        <div class="col-md-6 picture d-flex align-items-center justify-content-center">
                            <div class="overlay"></div>
                        </div>
                        <div class="col-md-6 p-5">
                            <div class="mb-3">
                                <label for="firstName" class="form-label">Name</label>
                                <input type="text"
                                       class="form-control"
                                       id="firstName"
                                       name="name"
                                       placeholder="e.g.: John"
                                       value="<?= $_SESSION['register']['fields']['name'] ?? null ?>"
                                       required
                                >
                                <?php formError($_SESSION['register']['errors']['name'] ?? null) ?>
                            </div>
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Surname</label>
                                <input type="text" class="form-control" id="lastName" name="surname"
                                       value="<?= $_SESSION['register']['fields']['surname'] ?? null ?>"
                                       placeholder="e.g.: Smith" required>
                                <?php formError($_SESSION['register']['errors']['surname'] ?? null) ?>
                            </div>
                            <div class="mb-3">
                                <label for="birthdate" class="form-label">Birthdate</label>
                                <input type="date" class="form-control" id="birthdate" name="birthdate"
                                       value="<?= $_SESSION['register']['fields']['birthdate'] ?? null ?>"
                                       required>
                                <?php formError($_SESSION['register']['errors']['birthdate'] ?? null) ?>
                            </div>
                            <div class="mb-3">
                                <label for="InputEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="InputEmail"
                                       aria-describedby="emailHelp" name="email" placeholder="example@email.com"
                                       value="<?= $_SESSION['register']['fields']['email'] ?? null ?>"
                                       required>
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone
                                    else.
                                </div>
                                <?php formError($_SESSION['register']['errors']['email'] ?? null) ?>
                            </div>
                            <div class="mb-3">
                                <label for="InputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="InputPassword" name="password" required>
                                <?php formError($_SESSION['register']['errors']['password'] ?? null) ?>
                            </div>
                            <div class="mb-3">
                                <label for="InputPasswordConfirm" class="form-label">Password confirm</label>
                                <input type="password" class="form-control" id="InputPasswordConfirm"
                                       name="password_confirm" required>
                                <?php formError($_SESSION['register']['errors']['password_confirm'] ?? null) ?>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" name="policy" value="1" class="form-check-input"
                                       id="exampleCheck1" required>
                                <label class="form-check-label" for="exampleCheck1">I agree with something</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-primary form-control">Register</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
