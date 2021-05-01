@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')


    <section class="content">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <!-- SEARCH FORM -->
                <form class="form-inline ml-3">
                    <div class="input-group input-group-sm">
                        <input type="text" name="search" method="GET"  action="{{ route('admin.orders.index') }}" class="form-control">
                        <span class="input-group-append">
                    <button type="button" onclick="form.submit()" class="btn btn-info btn-flat">{{ trans('main.search') }}</button>
                  </span>
                    </div>
                </form>
                <br>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>{{ trans('main.row') }}</th>
                        <th>{{ trans('orders.product_name') }}</th>
                        <th>{{ trans('orders.sku') }}</th>
                        <th>{{ trans('orders.status') }}</th>
                        <th>{{ trans('orders.created_at') }}</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $key =>  $product)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->sku }}</td>
                            <td>{{ $product->status }}</td>
                            <td>{{ $product->converted_created_at }}</td>
                            <td width="20">
{{--                                @can('update', \App\Models\Order::class)--}}
                                    <a class="btn btn-md btn-warning" href="{{ route('admin.orders.edit',$product->id) }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
{{--                                @elsecan('view',\App\Models\Order::class)--}}
                                    <button class="btn btn-md btn-warning" disabled title="شما دسترسی ندارید">
                                        <i class="fa fa-edit"></i>
                                    </button>
{{--                                @endcan--}}
                            </td>
                            <td width="20">
{{--                                @can('delete', \App\Models\Order::class)--}}
                                    <form action="{{ route('admin.orders.delete',$product->id) }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="delete">
                                        <button  onclick="return confirm('آیا اطمینان دارید؟')"  class="btn btn-md btn-danger" type="submit"> <i class="fa fa-trash"></i></button>
                                    </form>
{{--                                @elsecan('view',\App\Models\Order::class)--}}
                                    <form>
                                        <button  disabled title="شما دسترسی ندارید" class="btn btn-md btn-danger" type="submit"> <i class="fa fa-trash"></i></button>
                                    </form>
{{--                                @endcan--}}
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        {{ $orders->links() }}
        <!-- /.card-body -->
        </div>
    </section>

@endsection()
