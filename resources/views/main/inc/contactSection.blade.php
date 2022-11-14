<section class="site-section bg-light" id="contact-section" data-aos="fade">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title mb-3">Contact Us</h2>
            </div>
        </div>
        <div class="row mb-5">



            <div class="col-md-4 text-center">
                <p class="mb-4">
                    <span class="icon-room d-block h4 text-primary"></span>
                    <span>{{__('contacts.address')}}</span>
                </p>
            </div>
            <div class="col-md-4 text-center">
                <p class="mb-4">
                    <span class="icon-phone d-block h4 text-primary"></span>
                    <a href="#">{{__('contacts.phone')}}</a>
                </p>
            </div>
            <div class="col-md-4 text-center">
                <p class="mb-0">
                    <span class="icon-mail_outline d-block h4 text-primary"></span>
                    <a href="#">{{__('contacts.myEmail')}}</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-5">



                <form action="{{route('main.store')}}" method="POST" class="p-5 bg-white">
                    @csrf
                    <h2 class="h4 text-black mb-5">{{__('contacts.title')}}</h2>

                    <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="text-black" for="fname">{{__('contacts.name')}}</label>
                            <input type="text" name="name" id="fname" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="text-black" for="lname">{{__('contacts.lastName')}}</label>
                            <input type="text" name="lastName" id="lname" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="email">{{__('contacts.email')}}</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="subject">{{__('contacts.subject')}}</label>
                            <input type="text" name="subject" id="subject" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="message">{{__('contacts.message')}}</label>
                            <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="{{__('contacts.button')}}" class="btn btn-primary btn-md text-white">
                        </div>
                    </div>


                </form>
            </div>

        </div>
    </div>
</section>
