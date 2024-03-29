@extends('layouts.app')

@section('title')
Digital Marketing
@endsection


@section('content')
<div class="d-flex justify-content-center ">
   <img src="images/Rectangle 11.png" alt="" class=" img-fluid w-100">
</div>

<div class="container-fluid ">
<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4 justify-content-center align-content-center mt-5 mx-5 gap-3" >
   <div class="d-flex justify-content-center align-content-center ">
<x-dmerketingcomp subtitle="Social Media Marketing" url="{{ url('socialmediamarketing')}}"/></div>
<div class="d-flex justify-content-center align-content-center">
<x-dmerketingcomp subtitle="Social Engin Marketing" url="{{ url('searchenginmarketing')}}" /></div>
<div class="d-flex justify-content-center align-content-center">
<x-dmerketingcomp subtitle="Search Engin Optimization" url="{{ url('searchenginoptimization')}}" /></div>
<div class="d-flex justify-content-center align-content-center">
<x-dmerketingcomp subtitle="Content Marketing" url="{{ url('contentmarketing') }}"/></div>
<div class="d-flex justify-content-center align-content-center">
<x-dmerketingcomp subtitle="Email Marketing" url="{{ url('emailmarketing') }}" /></div>
<div class="d-flex justify-content-center align-content-center">
<x-dmerketingcomp subtitle="Affiliate Marketing" url="{{ url('affiliatemarketing') }}" /></div>
<div class="d-flex justify-content-center align-content-center">
<x-dmerketingcomp subtitle="Influencer Marketing" url="{{ url('influencermarketing') }}"/></div>
</div>
</div>

<div class="">
   <x-maintitle maintitle="Digital Marketing"/>
<x-titledesc titledesc="Digital marketing is an essential component of modern business promotion strategies. With more and more consumers spending time online, businesses need to have a strong online presence to reach their target audience. Digital marketing techniques such as search engine optimization (SEO), social media marketing, email marketing, and content marketing can help businesses increase their visibility online, generate leads, and convert them into customers. By using digital marketing effectively, businesses can also measure their marketing performance, adjust their strategies based on data, and achieve their marketing goals more efficiently. Therefore, businesses that invest in digital marketing are likely to gain a competitive advantage and achieve sustainable growth in the long run"/>
</div>
<x-getstartedproject/>
<h2 class="fw-bold text-center m-5 text-dark">Advantage of Digital Marketing For Business Promotion</h2>
<div class="d-flex justify-content-center">
<div class="w-50">
<x-digitalmarketingadvantages point="Increased Reach" desc="Digital marketing allows businesses to reach a larger and more targeted audience through various channels like search engines, social media, and email marketing. "/>
<x-digitalmarketingadvantages point="Real-Time Performance Tracking" desc="Digital marketing enables businesses to track and measure their marketing performance in real-time. This allows them to quickly adjust their strategies based on data and optimize their campaigns for maximum impact"/>
<x-digitalmarketingadvantages point="Cost-Effective" desc="Digital marketing is often more cost-effective than traditional marketing methods. It eliminates the need for costly print, radio, or TV ads, and offers a wide range of affordable options to reach the target audience."/>
<x-digitalmarketingadvantages point="Brand Awareness" desc="Digital marketing helps businesses to build brand awareness by reaching a larger audience and engaging with customers through personalized messaging and content."/>
<x-digitalmarketingadvantages point="Better ROI" desc="With the help of digital marketing, businesses can achieve a better return on investment (ROI) by reducing costs, improving targeting, and increasing conversions"/>
<x-digitalmarketingadvantages point="Improved Customer Engagement Reach" desc="Digital marketing enables businesses to establish relationships with customers through personalized messaging, social media interactions, and email marketing campaigns."/>
<x-digitalmarketingadvantages point="Increased Customer Loyalty" desc="Digital marketing helps businesses to build customer loyalty by providing them with personalized experiences, relevant content, and responsive customer service."/>
</div>
</div>

<div class="d-flex justify-content-center">
<img src="images/digital-marketing 1.png" alt="" class="w-50">
</div>
<x-form/>
@endsection