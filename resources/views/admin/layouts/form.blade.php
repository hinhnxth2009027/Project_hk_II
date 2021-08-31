@extends('.admin.layouts.master')
@section('main_content')
    <div style="display: flex;justify-content: center">
        @yield('size_form')
        <form action="" method="post">
            @csrf
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title">@yield('title_form')</h2>
                </header>
                <div class="panel-body">
                    @yield('input_form')
                </div>
                <footer class="panel-footer">
                    <button style="width: 200px" class="btn btn-primary">Submit</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button style="width: 200px" class="btn btn-warning" type="reset">Reset</button>
                </footer>
            </section>
        </form>
    </div>
    </div>
@endsection
