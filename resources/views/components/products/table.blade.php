@forelse ($products as $product)
    <tr>
        <td>
            {{ $loop->iteration + $products->firstItem() - 1 }}
        </td>
        <td>
            <div class="productimgname">
                <a href="javascript:void(0);" class="product-img stock-img">
                    <img src="{{ $product->thumbnail ?: asset('build/img/no-image.svg') }}"
                        alt="product">
                </a>
                <a href="javascript:void(0);">{{ $product->name }}</a>
            </div>
        </td>
        <td>{{ $product->category?->name }}</td>
        <td>{{ $product->brand?->name }}</td>
        <td>৳ {{ $product->sale_price }}</td>
        <td>{{ $product->total_available_quantity }}</td>
        <td class="action-table-data">
            <div class="edit-delete-action">
                <a class="me-2 edit-icon  p-2" href="{{ url('product-details') }}"
                    data-bs-toggle="modal" data-bs-target="#products-{{ $product->id }}">
                    <i data-feather="eye" class="feather-eye"></i>
                </a>
                {{-- @permission('product-update') --}}
                <a class="me-2 p-2" href="{{ route('admin.products.edit', $product->id) }}">
                    <i data-feather="edit" class="feather-edit"></i>
                </a>
                {{-- @endpermission --}}
                <form action="{{ route('admin.products.destroy', $product->id) }}"
                    class="delete-form" method="post">
                    @csrf
                    @method('DELETE')
                    <a class="confirm-text2 p-2" href="javascript:void(0);">
                        <i data-feather="trash-2" class="feather-trash-2"></i>
                    </a>
                </form>
            </div>
        </td>
    </tr>

    <!-- Edit product -->
    <div class="modal fade" id="edit-product-{{ $product->id }}">
        <div class="modal-dialog modal-dialog-centered custom-modal-two">
            <div class="modal-content">
                <div class="page-wrapper-new p-0">
                    <div class="content">
                        <div class="modal-header border-0 custom-modal-header">
                            <div class="page-title">
                                <h4>Edit product</h4>
                            </div>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body custom-modal-body new-employee-field">
                            <form action="{{ route('admin.products.update', $product->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label class="form-label">product</label>
                                    <input type="text" class="form-control" value="{{ $product->name }}"
                                        name="name">
                                </div>
                                <label class="form-label">Logo</label>
                                <div class="profile-pic-upload mb-3">
                                    <div class="profile-pic product-pic">
                                        <span><img src="{{ URL::asset('/build/img/product/product-icon-02.png') }}"
                                                alt=""></span>
                                        <a href="javascript:void(0);" class="remove-photo"><i data-feather="x"
                                                class="x-square-add"></i></a>
                                    </div>
                                    <div class="image-upload mb-0">
                                        <input type="file">
                                        <div class="image-uploads">
                                            <h4>Change Image</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer-btn">
                                    <button type="button" class="btn btn-cancel me-2"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-submit">Save
                                        Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit product -->
@empty
    <tr class="text-center">
        <td colspan="7">No Product Found</td>
    </tr>
@endforelse
