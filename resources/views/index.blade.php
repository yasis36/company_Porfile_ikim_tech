

<x-layout :title="$title" :activePage="$activePage">

    @section('page')
  
      
            <main class="relative h-screen overflow-hidden font-ubuntu flex items-center justify-center">

        <div class="absolute inset-0 z-0">
    <div id="slider" class="h-screen flex w-[300vw] h-full transition-transform duration-700 ease-in-out">
      <img src="{{ asset('images/slider1.jpg') }}" class="w-screen h-full object-cover" alt="Slide 1">
      <img src="{{ asset('images/slider2.png') }}" class="w-screen h-full object-cover" alt="Slide 2">
      <img src="{{ asset('images/slider3.jpg') }}" class="w-screen h-full object-cover" alt="Slide 3">
    </div>
    <div class="absolute inset-0 bg-black bg-opacity-30 backdrop-blur-sm"></div>
  </div>    
        
        <div class="absolute inset-0 " style="background-color:rgba(1, 77, 125, 0) ;"></div>
            <div class="relative z-10 text-slate-100 pt-20 px-6 space-y-4">
                <h1 class="text-lg font-semibold uppercase flex items-center justify-center">Welcome To IKIM Tech Co.</h1>
                <h2 class="text-5xl font-bold uppercase lg:text-7xl flex items-center justify-center">Technolgy Solution <br class="hidden md:block flex items-center justify-center"> 
                </h2>
                    <h4 class="text-md font-medium max-w-2xl mx-auto  flex items-center justify-center">We deliver innovative IT services tailored to your business needs.</h4>
                    <h4 class="text-md font-medium max-w-2xl mx-auto  flex items-center justify-center">Our team of experts is dedicated to providing top-notch solutions that drive success.</h4>
                <p class="text-md font-medium text-base md:pr-80 "><br class="hidden lg:block">
                   </p>
               <div class="flex justify-center">
                  <button style="background-color:  #033D54 ; color: #fff;"
                      class="bg-slate-100 text-sky-800 py-4 px-20 rounded-xl font-bold text-md uppercase hover:bg-sky-800 hover:text-slate-100 hover:ring hover:ring-sky-800 transition duration-300">
                         contact us
                     </button>

                </div>

            </div>
        </main>

        <section class="bg-white font-ubuntu">
            <div class="px-6 pt-20 pb-24 space-y-30 md:px-24">
                <div class="text-center text-gray-900 space-y-4">
                    <h1 class="text-4xl font-bold uppercase">We Are IKIM Tech Co </h1>
                    <p class="text-sm px-6 pt-2 pb-4 space-y-30 md:px-24">We create captivating visuals and functional mobile and web application 
                        to enhance your online presence. 
                        Our design feature intuitive interface and stunning graphics, 
                        ensuring a memorable experience that stands out across all platforms.</p>
                </div>
    <div class="h-20 absolute inset-0 bg-black bg-opacity-30 backdrop-blur-sm"></div>
                <br>
<h1 class="text-2xl font-bold uppercase flex items-center justify-center">our services</h1>
<br><br>
                <div class="flex justify-center" >
                    <div class="bg-white rounded-lg text-center grid grid-cols-1 gap-y-5 md:grid-cols-3 md:gap-x-6 "style="  margin-left: 15%; margin-right: 15%">
                    <div style="background-color:#033D54; border: 10px solid #033D54 ;  padding: 1rem;  border-radius: 0.5rem; box-shadow: 0 1px 3px #033D54 ;     
transition: all 0.3s ease; "
  onmouseover="this.style.boxShadow='0 10px 15px rgba(220, 13, 13, 0.84)';this.style.borderColor='#0369a1';" 
   onmouseout="this.style.boxShadow='0 1px 3px rgba(0, 0, 0, 0.1)'; this.style.borderColor='#033D54 ';">                          
                          <div class="flex justify-center">
                               <svg class="w-10 h-10 text-gray-900 mb-3" style="color:rgb(255, 255, 255);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8.7 6.3a1 1 0 0 0-1.4 0l-5 5a1 1 0 0 0 0 1.4l5 5a1 1 0 1 0 1.4-1.4L4.41 12l4.29-4.3a1 1 0 0 0 0-1.4zm6.6 0a1 1 0 0 1 1.4 0l5 5a1 1 0 0 1 0 1.4l-5 5a1 1 0 0 1-1.4-1.4L19.59 12l-4.29-4.3a1 1 0 0 1 0-1.4z"/>
                                </svg>

                            </div>
                            <h5 class="mb-2 text-xl font-semibold tracking-tight text--900"style="color:rgb(255, 255, 255);">Web Development

                            </h5>
                            <p class="mb-3 font-normal text-gray-900 opacity-60"style="color:rgb(255, 255, 255);">Build user-friendly websites that work 
                                seamlessly on all devices. Create intuitive designs that
                                 enhance user experience and engagement.

</p>
                        </div>

<div style="border: 10px solid #033D54 ;  padding: 1rem;  border-radius: 0.5rem; box-shadow: 0 1px 3px #033D54 ;     
transition: all 0.3s ease; "
  onmouseover="this.style.boxShadow='0 10px 15px rgba(220, 13, 13, 0.84)';this.style.borderColor='#0369a1';" 
   onmouseout="this.style.boxShadow='0 1px 3px rgba(0, 0, 0, 0.1)'; this.style.borderColor='#033D54 ';"
>                             <div class="flex justify-center">
                                <svg class="w-10 h-10 text-gray-900 mb-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17 1H7C5.9 1 5 1.9 5 3v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-2-2-2zm-5 20c-.55 0-1-.45-1-1s.45-1 1-1 
  1 .45 1 1-.45 1-1 1zm5-3H7V4h10v14z"/>
</svg>

                            </div>
                            <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900">Mobile App Development

                            </h5>
                            <p class="mb-3 font-normal text-gray-900 opacity-60">Custom iOS and Android applications
                                 tailored to your business needs,
                                 along with efficient cross-platform solutions.</p>
                        </div>
                        
<div style="background-color:#033D54; border: 10px solid #033D54 ;  padding: 1rem;  border-radius: 0.5rem; box-shadow: 0 1px 3px #033D54 ;     
transition: all 0.3s ease; "
  onmouseover="this.style.boxShadow='0 10px 15px rgba(220, 13, 13, 0.84)';this.style.borderColor='#0369a1';" 
   onmouseout="this.style.boxShadow='0 1px 3px rgba(0, 0, 0, 0.1)'; this.style.borderColor='#033D54 ';"
>                             <div class="flex justify-center">
                                <svg class="w-10 h-10 text-gray-900 mb-3" style="color:rgb(255, 255, 255);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
  <path d="M3 3h8v8H3V3zm2 2v4h4V5H5zm10 0h6v2h-6V5zm0 4h6v2h-6V9zm-2.59 4.41L9 19l1.41 1.41L14 16.83l2.59 2.58L18 18l-4.59-4.59z"/>
</svg>

                            </div>
                            <h5 class="mb-2 text-xxl font-semibold tracking-tight text--900"style="color:rgb(255, 255, 255);">UI/UX Design

                            </h5>
                           <p class="mb-3 font-normal text-gray-900 opacity-60">Emphasizing user-centric design to 
                                create intuitive interfaces, 
                                along with prototyping and wireframing to visualize and test concepts.</p>

                        </div>

<div style="border: 10px solid #033D54 ;  padding: 1rem;  border-radius: 0.5rem; box-shadow: 0 1px 3px #033D54 ;     
transition: all 0.3s ease; "
  onmouseover="this.style.boxShadow='0 10px 15px rgba(220, 13, 13, 0.84)';this.style.borderColor='#0369a1';" 
   onmouseout="this.style.boxShadow='0 1px 3px rgba(0, 0, 0, 0.1)'; this.style.borderColor='#033D54 ';"
>                             <div class="flex justify-center">
                                <svg class="w-10 h-10 text-gray-900 mb-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
  <path d="M4 6h16V4H4v2zm0 5h16V9H4v2zm0 5h16v-2H4v2zm0 3h16v-2H4v2z"/>
</svg>

                            </div>
                            <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900">Web Hosting


                            </h5>
                            <p class="mb-3 font-normal text-gray-900 opacity-60">Ensures that your website is accessible to users, 
                                allowing businesses and individuals to establish their online presence easily.</p>

                        </div>

                        <div style="background-color:#033D54; border: 10px solid #033D54 ;  padding: 1rem;  border-radius: 0.5rem; box-shadow: 0 1px 3px #033D54 ;     
transition: all 0.3s ease; "
  onmouseover="this.style.boxShadow='0 10px 15px rgba(220, 13, 13, 0.84)';this.style.borderColor='#0369a1';" 
   onmouseout="this.style.boxShadow='0 1px 3px rgba(0, 0, 0, 0.1)'; this.style.borderColor='#033D54 ';" style="background-color:#033D54;">
                            <div class="flex justify-center">
                                <svg class="w-10 h-10 text-gray-900 mb-3" style="color:rgb(255, 255, 255);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
  <path d="M7 16c-1.66 0-3 1.34-3 3 0 1.31 1.06 2 2.25 2H7c1.66 0 3-1.34 3-3s-1.34-2-3-2zm9.71-11.29c-.39-.39-1.02-.39-1.41 
  0L7.41 12.59 6 17l4.41-1.41L19.29 6.7c.39-.39.39-1.02 0-1.41l-2.58-2.58z"/>
</svg>

                            </div>
                            <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900" style="color:rgb(255, 255, 255);">Graphics Design

                            </h5>
                            <p class="mb-3 font-normal text-gray-900 opacity-60"style="color:rgb(255, 255, 255);">Creating logos, branding assets, 
                                and digital visuals for 
                                websites and social media by merging artistic flair with technical expertise.</p>

                        </div>

<div style="border: 10px solid #033D54 ;  padding: 1rem;  border-radius: 0.5rem; box-shadow: 0 1px 3px #033D54 ;     
transition: all 0.3s ease; "
  onmouseover="this.style.boxShadow='0 10px 15px rgba(220, 13, 13, 0.84)';this.style.borderColor='#0369a1';" 
   onmouseout="this.style.boxShadow='0 1px 3px rgba(0, 0, 0, 0.1)'; this.style.borderColor='#033D54 ';"
>                             <div class="flex justify-center">
                                <svg class="w-10 h-10 text-gray-900 mb-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
  <path d="M19 8H5c-1.1 0-2 .9-2 2v6h4v4h10v-4h4v-6c0-1.1-.9-2-2-2zM17 18H7v-4h10v4zm0-10V4H7v4h10z"/>
</svg>

                            </div>
                            <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900">Printing

                            </h5>
                            <p class="mb-3 font-normal text-gray-900 opacity-60">Our printing design service specializes 
                                in creating high-quality 
                                graphics for print media like brochures, business cards, and posters.</p>

                        </div>

<div style="background-color:#033D54; border: 10px solid #033D54 ;  padding: 1rem;  border-radius: 0.5rem; box-shadow: 0 1px 3px #033D54 ;     
transition: all 0.3s ease; "
  onmouseover="this.style.boxShadow='0 10px 15px rgba(220, 13, 13, 0.84)';this.style.borderColor='#0369a1';" 
   onmouseout="this.style.boxShadow='0 1px 3px rgba(0, 0, 0, 0.1)'; this.style.borderColor='#033D54 ';"
>                             <div class="flex justify-center">
                              <svg class="w-10 h-10 text-gray-900 mb-3" style="color:rgb(255, 255, 255);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
  <path d="M11 2v2.1L5.21 7l.79.61 5-2.89 5 2.89.79-.61L13 4.1V2h-2zm9 6.3v7.4c0 .39-.23.74-.59.91L12 21l-7.41-4.39A1 1 0 
  0 1 4 15.7V8.3c0-.39.23-.74.59-.91L12 3l7.41 4.39c.36.17.59.52.59.91z"/>
</svg>

                            </div>
                            <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900"style="color:rgb(255, 255, 255);">3D Designing


                            </h5>
                            <p class="mb-3 font-normal text-gray-900 opacity-60"style="color:rgb(255, 255, 255);">Offers innovative solutions 
                                for creating detailed three-dimensional models and visualizations. 
                                Whether for product design, architectural visualization, or animation.</p>

                        </div>

<div style="border: 10px solid #033D54 ;  padding: 1rem;  border-radius: 0.5rem; box-shadow: 0 1px 3px #033D54 ;     
transition: all 0.3s ease; "
  onmouseover="this.style.boxShadow='0 10px 15px rgba(220, 13, 13, 0.84)';this.style.borderColor='#0369a1';" 
   onmouseout="this.style.boxShadow='0 1px 3px rgba(0, 0, 0, 0.1)'; this.style.borderColor='#033D54 ';"
>                             <div class="flex justify-center">
                               <svg class="w-10 h-10 text-gray-900 mb-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
  <path d="M20 4H4v2h16V4zm0 4H4v10h16V8zm-5 3.5L9 16V10l6 3.5z"/>
</svg>

                            </div>
                            <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900">Video Editing


                            </h5>
                            <p class="mb-3 font-normal text-gray-900 opacity-60">Transforms raw footage into polished, engaging content. 
                                We specialize in creating captivating videos for promotional materials, 
                                social media, events, and more.</p>

                        </div>

<div style="background-color:#033D54; border: 10px solid #033D54 ;  padding: 1rem;  border-radius: 0.5rem; box-shadow: 0 1px 3px #033D54 ;     
transition: all 0.3s ease; "
  onmouseover="this.style.boxShadow='0 10px 15px rgba(220, 13, 13, 0.84)';this.style.borderColor='#0369a1';" 
   onmouseout="this.style.boxShadow='0 1px 3px rgba(0, 0, 0, 0.1)'; this.style.borderColor='#033D54 ';"
>                             <div class="flex justify-center">
                               <svg class="w-10 h-10 text-gray-900 mb-3" style="color:rgb(255, 255, 255);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
  <path d="M3 17h2v-6H3v6zm4 0h2V7H7v10zm4 0h2v-4h-2v4zm4 0h2v-8h-2v8zm4 0h2V4h-2v13z"/>
</svg>

                            </div>
                            <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900" style="color:rgb(255, 255, 255);">Market Consultancy


                            </h5>
                            <p class="mb-3 font-normal text-gray-900 opacity-60" style="color:rgb(255, 255, 255);">Expert analysis and strategic 
                                insights to help businesses understand market trends, identify opportunities, 
                                and make data-driven decisions for growth and success.</p>

                        </div>

                        
                    </div>
                </div>
            </div>
        </section>

        

        <section class="bg-white font-ubuntu">
            <div class="py-20 px-6 grid grid-cols-1 gap-y-8 lg:grid-cols-2 lg:items-center lg:gap-x-4 lg:px-20">
                <div class="space-y-6">
                    <h1 class="text-4xl font-semibold uppercase md:text-5xl">Why Choose Us</h1>
                    <p class="text-sm opacity-80">At IKIM Tech, we combine innovation, expertise, 
                        and dedication to deliver exceptional results. Here's why we stand out:</p>
                    <button
                        class="transition duration-300 bg-sky-800 text-white py-2 px-4 font-bold text-md uppercase hover:bg-white hover:text-sky-800 hover:ring hover:ring-sky-800">Explore
                        Now</button>
                </div>

                <div class="grid grid-cols-1 gap-y-6 lg:grid-cols-2 lg:gap-x-6">
                    <div class="relative w-full h-full rounded-lg overflow-hidden">
    <!-- Background image -->
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/creative.jpg') }}');"></div>

    <!-- Overlay for blur and dark tint -->
    <div class="absolute inset-0 bg-black/10 backdrop-blur-sm"></div>

    <!-- Content -->
    <div class="relative space-y-4 border border-gray-900/50 p-6 text-center text-white z-10">
        <div class="flex justify-center">
            <svg class="w-10 h-10 text-sky-700 mb-3" xmlns="http://www.w3.org/2000/svg" height="24px"
                viewBox="0 -960 960 960" width="24px" fill="currentColor">
                <path
                    d="M480-80q-26 0-47-12.5T400-126q-33 0-56.5-23.5T320-206v-142q-59-39-94.5-103T190-590q0-121 84.5-205.5T480-880q121 0 205.5 84.5T770-590q0 77-35.5 140T640-348v142q0 33-23.5 56.5T560-126q-12 21-33 33.5T480-80Zm-80-126h160v-36H400v36Zm0-76h160v-38H400v38Zm-8-118h58v-108l-88-88 42-42 76 76 76-76 42 42-88 88v108h58q54-26 88-76.5T690-590q0-88-61-149t-149-61q-88 0-149 61t-61 149q0 63 34 113.5t88 76.5Z" />
            </svg>
        </div>
        <h5 class="mb-2 text-xl font-semibold tracking-tight">CREATIVE DESIGN</h5>
        <p class="mb-3 font-normal">Creative design involves using computer-generated imagery and digital animation to visualise a product.</p>
    </div>
</div>


                     <div class="relative w-full h-full rounded-lg overflow-hidden">
    <!-- Background image -->
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/web-consult.png') }}');"></div>

    <!-- Overlay for blur and dark tint -->
    <div class="absolute inset-0 bg-black/10 backdrop-blur-sm"></div>

    <!-- Content -->
    <div class="relative space-y-4 border border-gray-900/50 p-6 text-center text-white z-10">
        <div class="flex justify-center">
                            <svg class="w-10 h-10 text-gray-900 mb-3" xmlns="http://www.w3.org/2000/svg" height="24px"
                                viewBox="0 -960 960 960" width="24px" fill="075985">
                                <path
                                    d="M120-120v-200h160l160-160v-128q-36-13-58-43.5T360-720q0-50 35-85t85-35q50 0 85 35t35 85q0 38-22 68.5T520-608v128l160 160h160v200H640v-122L480-402 320-242v122H120Z" />
                            </svg>
                        </div>
                        <h5 class="mb-2 text-xl font-semibold tracking-tight ">Free Consultation
</h5>
                        <p class="mb-3 font-normal ">free consultation is to provide a potential client
                             with information regarding the services that we provide.</p>
                    </div>
</div>

                    <div class="relative w-full h-full rounded-lg overflow-hidden">
    <!-- Background image -->
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/quality.jpg') }}');"></div>

    <!-- Overlay for blur and dark tint -->
    <div class="absolute inset-0 bg-black/10 backdrop-blur-sm"></div>

    <!-- Content -->
    <div class="relative space-y-4 border border-gray-900/50 p-6 text-center text-white z-10">
        <div class="flex justify-center">
                            <svg class="w-10 h-10 text-gray-900 mb-3" xmlns="http://www.w3.org/2000/svg" height="24px"
                                viewBox="0 -960 960 960" width="24px" fill="#075985">
                                <path
                                    d="M40-120v-80h880v80H40Zm120-120q-33 0-56.5-23.5T80-320v-440q0-33 23.5-56.5T160-840h640q33 0 56.5 23.5T880-760v440q0 33-23.5 56.5T800-240H160Zm0-80h640v-440H160v440Zm0 0v-440 440Z" />
                            </svg>
                        </div>
                        <h5 class="mb-2 text-xl font-semibold tracking-tight ">Quality Services

                        </h5>
                        <p class="mb-3 font-normal ">measures a company's service delivery 
                            against customer expectations.</p>
                    </div>
                    </div>

                     <div class="relative w-full h-full rounded-lg overflow-hidden">
    <!-- Background image -->
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/Customer.jpg') }}');"></div>

    <!-- Overlay for blur and dark tint -->
    <div class="absolute inset-0 bg-black/10 backdrop-blur-sm"></div>

    <!-- Content -->
    <div class="relative space-y-4 border border-gray-900/50 p-6 text-center text-white z-10">
        <div class="flex justify-center">
                            <svg class="w-10 h-10 text-gray-900 mb-3" xmlns="http://www.w3.org/2000/svg" height="24px"
                                viewBox="0 -960 960 960" width="24px" fill="#075985">
                                <path
                                    d="M120-120v-200h160l160-160v-128q-36-13-58-43.5T360-720q0-50 35-85t85-35q50 0 85 35t35 85q0 38-22 68.5T520-608v128l160 160h160v200H640v-122L480-402 320-242v122H120Z" />
                            </svg>
                        </div>
                        <h5 class="mb-2 text-xl font-semibold tracking-tight ">Customer Support

                        </h5>
                        <p class="mb-3 font-normal ">the team of people who help customers
                             with a company's products or services.</p>
                    </div>
                     </div>
                </div>
            </div>
        </section>

        <section class="relative bg-main bg-cover bg-center bg-fixed lg:h-auto font-ubuntu">
            <div class="absolute inset-0 bg-black opacity-60"></div>
            <div class="relative z-10 flex items-center justify-center h-full lg:h-auto">
                <div class="text-center max-w-7xl px-4 lg:px-8 lg:py-16">
                    <div class="mt-8 mb-8 grid grid-cols-1 gap-14 lg:grid-cols-4 lg:grid-rows-1 lg:gap-20">
                        <div class="space-y-2">
                            <h1 class="text-6xl text-slate-100 font-semibold counter" data-target="13">10</h1>
                            <p class="text-slate-100 uppercase font-semibold whitespace-nowrap">Business Years</p>
                        </div>
                        <div class="space-y-2">
                            <h1 class="text-6xl text-slate-100 font-semibold counter" data-target="6213">70 +</h1>
                            <p class="text-slate-100 uppercase font-semibold whitespace-nowrap">Worldwide Clients</p>
                        </div>
                        <div class="space-y-2">
                            <h1 class="text-6xl text-slate-100 font-semibold counter" data-target="55">20</h1>
                            <p class="text-slate-100 uppercase font-semibold whitespace-nowrap">Our Team</p>
                        </div>
                        <div class="space-y-2">
                            <h1 class="text-6xl text-slate-100 font-semibold counter" data-target="344">100</h1>
                            <p class="text-slate-100 uppercase font-semibold whitespace-nowrap">Items Portfolio </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white font-ubuntu">
            <div class="py-20 px-6 space-y-6 lg:px-20">
                <div class="text-center space-y-6">
                    <h1 class="text-4xl font-bold md:text-5xl text-gray-900">Team Members</h1>
                    <p class="text-sm text-gray-900 opacity-80"> the powerfull team</p>
                </div>

                <div class="grid grid-cols-1 text-center gap-y-6 lg:grid-cols-4 lg:gap-x-4">
                    <div class="bg-white border border-gray-900/50 rounded-lg shadow">
                        <img class="rounded-t-lg" src="{{ asset('images/person 1.png') }}" alt="" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">CRISTINO RONALDO
                            </h5>
                            <p class="mb-3 font-normal text-gray-700">CEO & Founder</p>
                            </p>
                        </div>
                    </div>

                    <div class="bg-white border border-gray-900/50 rounded-lg shadow">
                        <img class="rounded-t-lg" src="{{ asset('images/person 2.png') }}" alt="" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">JESSICA SIMPSON
                            </h5>
                            <p class="mb-3 font-normal text-gray-700">Sales
                            </p>
                        </div>
                    </div>

                    <div class="bg-white border border-gray-900/50 rounded-lg shadow">
                        <img class="rounded-t-lg" src="{{ asset('images/person 3.png') }}" alt="" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">JAMES BOND
                            </h5>
                            <p class="mb-3 font-normal text-gray-700">Software Engineer
                            </p>
                        </div>
                    </div>

                    <div class="bg-white border border-gray-900/50 rounded-lg shadow">
                        <img class="rounded-t-lg" src="{{ asset('images/person 4.png') }}" alt="" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Grandma 
                            </h5>
                            <p class="mb-3 font-normal text-gray-700">Marketing Manager
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="bg-white font-ubuntu">
            <div class="py-20 px-6 space-y-8 md:px-20">
                <div class="text-center">
                    <h1 class="text-4xl text-gray-900 font-bold md:text-5xl">WHAT OUR CLIENT SAY
                    </h1>
                </div>

                <div class="grid grid-cols-1 gap-y-6 md:grid-cols-2 md:gap-x-6">
                    <figure
                        class="flex flex-col items-center justify-center p-8 text-center bg-white border border-gray-900 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e">
                        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-900 lg:mb-8">
                            <p class="my-4" >                                 I appreciate you talent and creativity.

                            </p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center">
                            <img class="rounded-full w-9 h-9"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                                alt="profile picture">
                            <div class="space-y-0.5 font-medium text-left rtl:text-right ms-3">
                                <div>Bonnie Green</div>
                                <div class="text-sm text-gray-500">Developer at Open AI</div>
                            </div>
                        </figcaption>
                    </figure>

                    <figure
                        class="flex flex-col items-center justify-center p-8 text-center bg-white border border-gray-900 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e">
                        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-900 lg:mb-8"fill="#278910">
                            <p class="my-4">Great Job 
                            </p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center">
                            <img class="rounded-full w-9 h-9"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                                alt="profile picture">
                            <div class="space-y-0.5 font-medium text-left rtl:text-right ms-3">
                                <div>Bonnie Green</div>
                                <div class="text-sm text-gray-500">Developer at Open AI</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>
        <script>
  const slider = document.getElementById('slider');
  const totalSlides = slider.children.length;
  let index = 0;

  function updateSlider() {
    slider.style.transform = `translateX(-${index * 100}vw)`;
  }

  function nextSlide() {
    index = (index + 1) % totalSlides;
    updateSlider();
  }

  setInterval(nextSlide, 5000);
  updateSlider();
</script>

    @endsection
    
</x-layout>
