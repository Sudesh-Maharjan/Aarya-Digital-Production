@extends('layouts.app')

@section('title')
Photography
@endsection

@section('content')
<div class="d-flex justify-content-center">
<img src="images/Rectangle 11.png" alt="" class="img-fluid">
</div>
<div class="mx-lg-5">
   <x-maintitle maintitle="Photography"/>
<x-titledesc titledesc="Photography plays a critical role in business growth as it helps companies to visually communicate their brand message, products, and services to potential customers. By using high-quality images in branding, product promotion, content marketing, e-commerce, and corporate events, businesses can improve customer engagement, increase sales, and establish a strong brand identity, ultimately leading to business growth"/>
</div>
<x-getstartedproject/>
<h2 class="fw-bold text-center my-5">Advantage of Social Media Marketing (SMM) For Business Promotion</h2>
<div class="d-flex justify-content-center">
<div class="w-50">
<x-digitalmarketingadvantages point="Branding" desc="Photography can help businesses to establish their brand identity by creating a visual language that resonates with their target audience. This includes using high-quality images on websites, social media, and marketing materials to showcase the company's products, services, and culture."/>
<x-digitalmarketingadvantages point="Product promotion" desc="High-quality product photography can help businesses to showcase their products in the best possible light and highlight their unique features, leading to increased sales and customer engagement"/>
<x-digitalmarketingadvantages point="Content marketing" desc="Photography can be a powerful tool for content marketing, providing visual content that can be used across multiple channels. This includes social media posts, blog articles, and email marketing campaigns."/>
<x-digitalmarketingadvantages point="E-commerce" desc="Photography plays a crucial role in e-commerce by helping customers to make informed purchase decisions. High-quality product photos can improve the customer's shopping experience and increase the likelihood of a sale."/>

</div>
</div>
<x-maintitle maintitle="Our Photography Services"/>
<x-photographycomponent />
<x-form/>

@endsection