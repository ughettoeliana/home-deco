@extends('layouts.admin')

@section('title', 'Create Product')

@section('main')
  <div>
    <h1  class="text-center">Create a new product</h1>
    <form action="{{ route('products.processNewProduct')}}" method="post">
      @csrf
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      
      <label for="price">Price:</label>
      <input type="number" id="price" name="price" min="0.01" step="0.01" required>
      
      <label for="description">Description:</label>
      <textarea id="description" name="description" rows="4" required></textarea>
      
      <label for="category">Category:</label>
      <select id="category" name="category" required>
          <option value="furniture">Furniture</option>
          <option value="decor">Decor</option>
          <option value="lighting">Lighting</option>
          <option value="kitchen & dining">Kitchen & Dining</option>
          <option value="bedding & bath">Bedding & Bath</option>
          <option value="outdoor & garden">Outdoor & Garden</option>
          <option value="home office">Home Office</option>
          <option value="storage & organization">Storage & Organization</option>
          <option value="kids & baby">Kids & Baby</option>
          <option value="pet supplies">Pet Supplies</option>
      </select>
      
      <label for="image">Image URL:</label>
      <input type="text" id="image" name="image" >
      
      <label for="img-description">Image Description:</label>
      <input type="text" id="img-description" name="img-description" >
      
      <input type="submit" value="Submit">
  </form>  </div>
@endsection
