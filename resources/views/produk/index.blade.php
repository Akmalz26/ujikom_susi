@extends('layouts.admin')

@section('content')


             <a href="javascript:void(0)"  class="btn btn-primary btn-xs active mb-0 text-white" id="btn-create-produk">
                 Add Produk
             </a>
         
                  <thead>
                    <tr>
                      <th>Gambar</th>
                      <th>Nama Produk</th>
                      <th>Harga</th>
                      <th>stok</th>
                      <th>deskripsi</th>
                      <th>action</th>
                      {{-- <th>action</th> --}}
                    </tr>
                  </thead>
                  <tbody id="table-produks">
                    @foreach($produks as $produk)
                    <tr id="index_{{ $produk->id }}">
                        <td >
                        <img src="{{ asset('image/' . $produk->image) }}" class="img-fluid" width="150px">
                        </td>
                        <td >{{ $produk->nama }}</td>
                        <td >Rp. {{ number_format ($produk->harga) }}</td>
                        <td >{{ $produk->stok }}</td>
                        <td >{{ $produk->deskripsi }}</td>
                        {{-- <td class="text-center">
                            <a href="javascript:void(0)" id="btn-edit-produk" data-id="{{ $produk->id }}" class="btn btn-primary btn-sm">EDIT</a>
                            <a href="javascript:void(0)" id="btn-delete-produk" data-id="{{ $produk->id }}" class="btn btn-danger btn-sm">DELETE</a>
                        </td> --}}
                        <td class="text-center">
                          <a href="javascript:void(0)"  id="btn-edit-produk" data-id="{{ $produk->id }}" class="mx-3 btn btn-warning" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                              Edit
                          </a>
                          <span>
                            <a href="javascript:void(0)" id="btn-delete-produk" class="btn btn-danger" data-id="{{ $produk->id }}" data-bs-toggle="tooltip" data-bs-original-title="Detete">
                              delete
                            </a>
                          </span>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
  @include('produk.create')
  @include('produk.edit')
  @include('produk.delete')
  
  @endsection
