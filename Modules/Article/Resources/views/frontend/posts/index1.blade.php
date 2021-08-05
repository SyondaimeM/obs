@extends('frontend.layouts.app')

@section('title') {{ __('Posts') }} @endsection

@section('content')
    <section>

        <div class="text-center">
            <h5 class="common-h5">Our Brand Products</h5>
        </div>
        <div class="container">

            @if (count($$module_name))

                @foreach ($$module_name as $$module_name_singular)
                    @php
                        $details_url = route("frontend.$module_name.show", [encode_id($$module_name_singular->id), $$module_name_singular->slug]);
                    @endphp

                    <div class="blog-col">
                        <a href="{{ $details_url }}">
                            <h2>{{ $$module_name_singular->name }}</h2>
                        </a>
                        <a href="{{ $details_url }}">
                            <img src="{{ $$module_name_singular->featured_image }}" class="img-responsive" alt="">
                        </a>

                        <p>View <i class="fa fa-mobile-phone"></i> <a class="read" href="#">Now</a></p>
                    </div>

                @endforeach
                <div class="d-flex justify-content-center w-100 mt-3">
                    {{ $$module_name->links() }}
                </div>
            @endif
        </div>

    </section>
@endsection
