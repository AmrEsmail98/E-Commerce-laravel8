
<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Product
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.products')}}" class="btn btn-primary pull-right">All
                                    Products</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert" >{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addProduct">
                            <div class="form-group">
                                <label class="col-md-4 control-label"> Product Name</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Product-Name" wire:model="name" wire:keyup="generateSlug" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label"> Product Slug</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Product-Slug" wire:model="slug" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Short-Description</label>
                                <div class="col-md-4">
                                    <textarea  class="form-control" placeholder="Short-Description" wire:model="short_description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Description</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="Description" wire:model="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Regular Price</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Regular Price" wire:model="regular_price" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Sale Price</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Sale Price" wire:model="sale_price" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">SKU</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="SKU" wire:model="SKU" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Stock</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="stock_status">
                                        <option value="instock">Instock</option>
                                        <option value="outofstock">Out of stock</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Featured</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="featured">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Quantity</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Quantity" wire:model="quantity" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Product Image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="image"/>
                                    @if($image)
                                    <img src="{{$image->temporaryUrl()}}" width="120"/>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Category</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="category_id">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
