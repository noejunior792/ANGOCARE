@extends('layouts.admin.index')
@section('conteudo')

<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row">
                <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                            <span><b>Financiamentos Aprovados</b></span>
                            <div class="mt-2">
                                <h2 class="counter">{{ $financiamentos }}</h2>
                            </div>
                            </div>
                            <div>
                         
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                            {{-- <span>New Leads</span> --}}
                            </div>
                            <div>
                             @php
                             if($financiamento_p>0 && $financiamentos>0){
                                    $porcetangem=( $financiamento_p/ $financiamentos)*100;
                                }
                                else{
                                    $porcetangem=0;
                                }
                             @endphp

                            <span>{{ $porcetangem }}%</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="progress bg-soft-danger shadow-none w-100" style="height: 6px">
                            <div class="progress-bar bg-danger" data-toggle="progress-bar" role="progressbar" aria-valuenow="{{  $porcetangem }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                            <span><b>Requisição por Recursos Materias Aprovados</b></span>
                            <div class="mt-2">
                                <h2 class="counter">{{ $produto_p }}</h2>
                            </div>
                            </div>
                            <div>
                            {{-- <span class="badge bg-info">This Month</span> --}}
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                            {{-- <span>This Month</span> --}}
                            </div>
                            <div>
                                @php
                                if($produto_p>0 && $produtos>0){

                                $porcetangem=( $produto_p/ $produtos)*100;
                            }
                            else{
                                    $porcetangem=0;
                                }
                         @endphp
                            <span class="counter">{{ $porcetangem }}%</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="progress bg-soft-info shadow-none w-100" style="height: 6px">
                            <div class="progress-bar bg-info" data-toggle="progress-bar" role="progressbar" aria-valuenow="{{ $porcetangem }}%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                            <span><b>Organizações Aprovadas</b></span>
                            <div class="mt-2">
                                <h2 class="counter">{{ $organizacao_p }}</h2>
                            </div>
                            </div>
                            <div>
                            {{-- <span class="badge bg-success">This Month</span> --}}
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                            {{-- <span>This Month</span> --}}
                            </div>
                            <div>
                                @php
                                if($organizacao_p>0 && $organizacaos>0){
                                $porcetangem=( $organizacao_p/ $organizacaos)*100;
                                }
                                else{
                                    $porcetangem=0;
                                }
                         @endphp
                            <span class="counter">{{ $porcetangem }}%</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="progress bg-soft-info shadow-none w-100" style="height: 6px">
                            <div class="progress-bar bg-success" data-toggle="progress-bar" role="progressbar" aria-valuenow="{{ $porcetangem }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
    </div>
</div>
        <!-- Footer Section Start -->
        <footer class="footer">
            <div class="footer-body">
                <ul class="left-panel list-inline mb-0 p-0">
                    <li class="list-inline-item"><a href="javascript:void(0);">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="javascript:void(0);">Terms of Use</a></li>
                </ul>
                <div class="right-panel">
                    ©<script>2022</script> <span data-setting="app_name">Qompac UI</span>, Made with
                    <span class="text-gray">
                        <svg class="icon-16" width="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.85 2.50065C16.481 2.50065 17.111 2.58965 17.71 2.79065C21.401 3.99065 22.731 8.04065 21.62 11.5806C20.99 13.3896 19.96 15.0406 18.611 16.3896C16.68 18.2596 14.561 19.9196 12.28 21.3496L12.03 21.5006L11.77 21.3396C9.48102 19.9196 7.35002 18.2596 5.40102 16.3796C4.06102 15.0306 3.03002 13.3896 2.39002 11.5806C1.26002 8.04065 2.59002 3.99065 6.32102 2.76965C6.61102 2.66965 6.91002 2.59965 7.21002 2.56065H7.33002C7.61102 2.51965 7.89002 2.50065 8.17002 2.50065H8.28002C8.91002 2.51965 9.52002 2.62965 10.111 2.83065H10.17C10.21 2.84965 10.24 2.87065 10.26 2.88965C10.481 2.96065 10.69 3.04065 10.89 3.15065L11.27 3.32065C11.3618 3.36962 11.4649 3.44445 11.554 3.50912C11.6104 3.55009 11.6612 3.58699 11.7 3.61065C11.7163 3.62028 11.7329 3.62996 11.7496 3.63972C11.8354 3.68977 11.9247 3.74191 12 3.79965C13.111 2.95065 14.46 2.49065 15.85 2.50065ZM18.51 9.70065C18.92 9.68965 19.27 9.36065 19.3 8.93965V8.82065C19.33 7.41965 18.481 6.15065 17.19 5.66065C16.78 5.51965 16.33 5.74065 16.18 6.16065C16.04 6.58065 16.26 7.04065 16.68 7.18965C17.321 7.42965 17.75 8.06065 17.75 8.75965V8.79065C17.731 9.01965 17.8 9.24065 17.94 9.41065C18.08 9.58065 18.29 9.67965 18.51 9.70065Z" fill="currentColor"></path>
                        </svg>
                    </span> by <a href="https://iqonic.design/" target="_blank">IQONIC Design</a>.
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->
    </main>
      <!-- Wrapper End-->
     <!-- Live Customizer start -->
    <!-- Setting offcanvas start here -->
    {{-- <div class="offcanvas offcanvas-end live-customizer" tabindex="-1" id="live-customizer" data-bs-backdrop="false" data-bs-scroll="true" aria-labelledby="live-customizer-label" aria-modal="true" role="dialog">
          <div class="offcanvas-header pb-0">
              <div class="d-flex align-items-center">
                  <h4 class="offcanvas-title" id="live-customizer-label">Setting Pannel</h4>
              </div>
              <div class="close-icon" data-bs-dismiss="offcanvas">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                  </svg>
              </div>
          </div>
          <div class="offcanvas-body data-scrollbar">
              <div class="row">
                  <div class="col-lg-12">
                      <div>
                          <div class="text-center mb-4">
                              <h5 class="d-inline-block">Style Setting</h5>
                          </div>
                          <div>
                              <!-- Theme start here -->
                              <div class="mb-4">
                                  <h5 class="mb-3">Theme</h5>
                                  <div class=" mb-3" data-setting="radio">
                                      <div class="form-check mb-0 w-100">
                                          <input class="form-check-input custom-redio-btn" type="radio" value="light" name="theme_scheme" id="color-mode-light" checked="">
                                          <label class="form-check-label d-flex align-items-center justify-content-between" for="color-mode-light">
                                             <span>Light Theme</span> 
                                              <div class="text-primary ">
                                                  <svg width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="white"></rect>
                                                      <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"></circle>
                                                      <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"></rect>
                                                      <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"></rect>
                                                      <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" stroke="#DADCE0" stroke-width="0.75"></rect>
                                                  </svg>
                                              </div>
                                          </label>
                                      </div>
                                  </div>
                                   <div class=" mb-3" data-setting="radio">
                                      <div class="form-check mb-0 w-100 ">
                                          <input class="form-check-input custom-redio-btn" type="radio" value="dark" name="theme_scheme" id="color-mode-dark">
                                          <label class="form-check-label d-flex align-items-center justify-content-between" for="color-mode-dark">
                                             <span>Dark Theme</span>
                                             <div class="text-primary ">
                                                 <svg width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="#1E2745"></rect>
                                                      <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"></circle>
                                                      <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"></rect>
                                                      <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"></rect>
                                                      <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" stroke="currentColor" stroke-width="0.75"></rect>
                                                  </svg>
                                             </div>                                    
                                          </label>
                                      </div>
                                  </div>
                                  <div class="d-flex align-items-center justify-content-between" data-setting="radio">
                                      <div class="form-check mb-0 w-100">
                                          <input class="form-check-input custom-redio-btn" type="radio" value="auto" name="theme_scheme" id="color-mode-auto">
                                          <label class="form-check-label d-flex align-items-center justify-content-between" for="color-mode-auto">
                                             <span>Device Default</span> 
                                             <div class="text-primary ">
                                                  <svg class="rounded" width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="#1E2745"></rect>
                                                      <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"></circle>
                                                      <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"></rect>
                                                      <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"></rect>
                                                      <g clip-path="url(#clip0_507_92)">
                                                      <rect width="30" height="27" fill="white"></rect>
                                                      <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"></circle>
                                                      <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"></rect>
                                                      <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"></rect>
                                                      </g>
                                                      <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" stroke="#DADCE0" stroke-width="0.75"></rect>
                                                      <defs>
                                                      <clipPath id="clip0_507_92">
                                                      <rect width="30" height="27" fill="white"></rect>
                                                      </clipPath>
                                                      </defs>
                                                  </svg>
                                             </div>
                                          </label>
                                      </div>
                                      
                                  </div>
                              </div>
                              <!-- Color customizer end here -->
                              <hr class="hr-horizontal">
                              <!-- Menu start here -->
                              <div>
                                <h6 class="mt-4 mb-3">Menu Color</h6>
                                <div class="d-grid gap-3 grid-cols-3 mb-3">
                                    <div data-setting="radio">
                                        <input type="radio" value="sidebar-white" class="btn-check" name="sidebar_color" id="sidebar-white" checked="">
                                        <label class="btn btn-border d-block" for="sidebar-white" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="White Menu">
                                            Light
                                        </label>
                                    </div>
                                    <div data-setting="radio">
                                        <input type="radio" value="sidebar-dark" class="btn-check" name="sidebar_color" id="sidebar-dark">
                                        <label class="btn btn-border d-block" for="sidebar-dark" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Dark Menu">
                                            Dark
                                        </label>
                                    </div>
                                    <div data-setting="radio">
                                        <input type="radio" value="sidebar-color" class="btn-check" name="sidebar_color" id="sidebar-color">
                                        <label class="btn btn-border d-block" for="sidebar-color" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Colored Menu">
                                            Color
                                        </label>
                                    </div>
                                </div>
                              </div>
                              <hr class="hr-horizontal">
                              <!-- Menu Style start here -->
                              <div>
                                  <h5 class="mt-4 mb-3">Menu Style</h5>
                                  <div class="d-grid gap-3 grid-cols-3 mb-4">
                                      <div data-setting="checkbox" class="text-center">
                                          <input type="checkbox" value="sidebar-mini" class="btn-check" name="sidebar_type" id="sidebar-mini">
                                          <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="sidebar-mini">
                                              Mini
                                          </label>
                                      </div>
                                      <div data-setting="checkbox" class="text-center">
                                          <input type="checkbox" value="sidebar-hover" data-extra="{target: '.sidebar', ClassListAdd: 'sidebar-mini'}" class="btn-check" name="sidebar_type" id="sidebar-hover">
                                          <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="sidebar-hover">
                                              Hover
                                          </label>
                                      </div>
                                      <div data-setting="checkbox" class="text-center">
                                          <input type="checkbox" value="sidebar-soft" class="btn-check" name="sidebar_type" id="sidebar-soft">
                                          <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="sidebar-soft">
                                              Soft
                                          </label>
                                      </div>
                                  </div>
                              </div>
      
                              <!-- Menu Style end here -->
      
                              <hr class="hr-horizontal">
      
                              <!-- Active Menu Style start here -->
      
                              <div class="mb-4">
                                  <h5 class="mt-4 mb-3">Active Menu Style</h5>
                                  <div class="d-grid gap-3 grid-cols-2">
                                      <div data-setting="radio" class="text-center">
                                          <input type="radio" value="sidebar-default navs-rounded" class="btn-check" name="sidebar_menu_style" id="navs-rounded">
                                          <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-rounded">
                                              Rounded One
                                          </label>
                                      </div>
                                      <div data-setting="radio" class="text-center">
                                          <input type="radio" value="sidebar-default navs-rounded-all" class="btn-check" name="sidebar_menu_style" id="navs-rounded-all">
                                          <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-rounded-all">
                                              Rounded All
                                          </label>
                                      </div>
                                      <div data-setting="radio" class="text-center">
                                          <input type="radio" value="sidebar-default navs-pill" class="btn-check" name="sidebar_menu_style" id="navs-pill">
                                          <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-pill">
                                              Pill One Side
                                          </label>
                                      </div>
                                      <div data-setting="radio" class="text-center">
                                          <input type="radio" value="sidebar-default navs-pill-all" class="btn-check" name="sidebar_menu_style" id="navs-pill-all">
                                          <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-pill-all">
                                              Pill All
                                          </label>
                                      </div>
                                  </div>
                              </div>
                              <hr class="hr-horizontal">
                              <!-- Color customizer start here -->
                              <div>
                                <div class="d-flex align-items-center justify-content-between">
                                  <h6 class="mt-4 mb-3">Color Customizer</h6>
                                  <div class="d-flex align-items-center">
                                    <a href="#custom-color" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="custom-color">Custom</a>
                                    <div data-setting="radio">
                                      <input type="radio" value="theme-color-default" class="btn-check" name="theme_color" id="theme-color-default" data-colors="{&quot;primary&quot;: &quot;#7016d0&quot;, &quot;secondary&quot;: &quot;#aca4bc&quot;}">
                                      <label class="btn bg-transparent px-2 border-0" for="theme-color-default" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Reset Color" aria-label="Reset Color">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M21.4799 12.2424C21.7557 12.2326 21.9886 12.4482 21.9852 12.7241C21.9595 14.8075 21.2975 16.8392 20.0799 18.5506C18.7652 20.3986 16.8748 21.7718 14.6964 22.4612C12.518 23.1505 10.1711 23.1183 8.01299 22.3694C5.85488 21.6205 4.00382 20.196 2.74167 18.3126C1.47952 16.4293 0.875433 14.1905 1.02139 11.937C1.16734 9.68346 2.05534 7.53876 3.55018 5.82945C5.04501 4.12014 7.06478 2.93987 9.30193 2.46835C11.5391 1.99683 13.8711 2.2599 15.9428 3.2175L16.7558 1.91838C16.9822 1.55679 17.5282 1.62643 17.6565 2.03324L18.8635 5.85986C18.945 6.11851 18.8055 6.39505 18.549 6.48314L14.6564 7.82007C14.2314 7.96603 13.8445 7.52091 14.0483 7.12042L14.6828 5.87345C13.1977 5.18699 11.526 4.9984 9.92231 5.33642C8.31859 5.67443 6.8707 6.52052 5.79911 7.74586C4.72753 8.97119 4.09095 10.5086 3.98633 12.1241C3.8817 13.7395 4.31474 15.3445 5.21953 16.6945C6.12431 18.0446 7.45126 19.0658 8.99832 19.6027C10.5454 20.1395 12.2278 20.1626 13.7894 19.6684C15.351 19.1743 16.7062 18.1899 17.6486 16.8652C18.4937 15.6773 18.9654 14.2742 19.0113 12.8307C19.0201 12.5545 19.2341 12.3223 19.5103 12.3125L21.4799 12.2424Z" fill="#31BAF1"></path>
                                          <path d="M20.0941 18.5594C21.3117 16.848 21.9736 14.8163 21.9993 12.7329C22.0027 12.4569 21.7699 12.2413 21.4941 12.2512L19.5244 12.3213C19.2482 12.3311 19.0342 12.5633 19.0254 12.8395C18.9796 14.283 18.5078 15.6861 17.6628 16.8739C16.7203 18.1986 15.3651 19.183 13.8035 19.6772C12.2419 20.1714 10.5595 20.1483 9.01246 19.6114C7.4654 19.0746 6.13845 18.0534 5.23367 16.7033C4.66562 15.8557 4.28352 14.9076 4.10367 13.9196C4.00935 18.0934 6.49194 21.37 10.008 22.6416C10.697 22.8908 11.4336 22.9852 12.1652 22.9465C13.075 22.8983 13.8508 22.742 14.7105 22.4699C16.8889 21.7805 18.7794 20.4073 20.0941 18.5594Z" fill="#0169CA"></path>
                                        </svg>
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="collapse" id="custom-color">
                                  <div class="form-group d-flex justify-content-between align-items-center">
                                    <label class="" for="custom-primary-color">Primary</label>
                                    <input class="" name="theme_color" data-extra="primary" type="color" id="custom-primary-color" value="#7016d0" data-setting="color">
                                  </div>
                                  <div class="form-group d-flex d-flex justify-content-between align-items-center">
                                    <label class="" for="custom-secondary-color">Secondary</label>
                                    <input class="" name="theme_color" data-extra="secondary" type="color" id="custom-secondary-color" value="#08B1BA" data-setting="color">
                                  </div>
                                </div>
                                <div class="grid-cols-5 mb-4 d-grid gap-3">
                                  <div data-setting="radio">
                                    <input type="radio" value="theme-color-blue" class="btn-check" name="theme_color" id="theme-color-1" data-colors="{&quot;primary&quot;: &quot;#2185F4&quot;, &quot;secondary&quot;: &quot;#B1BBC6&quot;, &quot;tertiray&quot;: &quot;#FF8000&quot;}">
                                    <label class="btn btn-border d-block bg-transparent" for="theme-color-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Theme-1" aria-label="Theme-1">
                                      <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"> <circle cx="12" cy="12" r="10" fill="#2185F4"></circle> <path d="M2,12 a1,1 1 1,0 20,0" fill="#B1BBC6"></path></svg>
                                    </label>
                                  </div>
                                  <div data-setting="radio">
                                    <input type="radio" value="theme-color-gray" class="btn-check" name="theme_color" id="theme-color-2" data-colors="{&quot;primary&quot;: &quot;#34A853&quot;, &quot;secondary&quot;: &quot;#B1C6B7&quot;, &quot;tertiray&quot;: &quot;#EA4335&quot;}">
                                    <label class="btn btn-border d-block bg-transparent" for="theme-color-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Theme-2" aria-label="Theme-2">
                                      <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"> <circle cx="12" cy="12" r="10" fill="#34A853"></circle> <path d="M2,12 a1,1 1 1,0 20,0" fill="#B1C6B7"></path></svg>
                                    </label>
                                  </div>
                                  <div data-setting="radio">
                                    <input type="radio" value="theme-color-red" class="btn-check" name="theme_color" id="theme-color-3" data-colors="{&quot;primary&quot;: &quot;#553AF9&quot;, &quot;secondary&quot;: &quot;#B4B1C6&quot;, &quot;tertiray&quot;: &quot;#89F425&quot;}">
                                    <label class="btn btn-border d-block bg-transparent" for="theme-color-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Theme-3" aria-label="Theme-3">
                                      <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"> <circle cx="12" cy="12" r="10" fill="#553AF9"></circle> <path d="M2,12 a1,1 1 1,0 20,0" fill="#B4B1C6"></path></svg>
                                    </label>
                                  </div>
                                  <div data-setting="radio">
                                    <input type="radio" value="theme-color-yellow" class="btn-check" name="theme_color" id="theme-color-4" data-colors="{&quot;primary&quot;: &quot;#FF3003&quot;, &quot;secondary&quot;: &quot;#C6B5B1&quot;, &quot;tertiray&quot;: &quot;#0E0E0E&quot;}">
                                    <label class="btn btn-border d-block bg-transparent" for="theme-color-4" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Theme-4" aria-label="Theme-4">
                                      <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"> <circle cx="12" cy="12" r="10" fill="#FF3003"></circle> <path d="M2,12 a1,1 1 1,0 20,0" fill="#C6B5B1"></path></svg>
                                    </label>
                                  </div>
                                  <div data-setting="radio">
                                    <input type="radio" value="theme-color-pink" class="btn-check" name="theme_color" id="theme-color-5" data-colors="{&quot;primary&quot;: &quot;#fa6aae&quot;, &quot;secondary&quot;: &quot;#cfc6c6&quot;, &quot;tertiray&quot;: &quot;#25C799&quot;}">
                                    <label class="btn btn-border d-block bg-transparent" for="theme-color-5" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Theme-5" aria-label="Theme-5">
                                      <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"> <circle cx="12" cy="12" r="10" fill="#fa6aae"></circle> <path d="M2,12 a1,1 1 1,0 20,0" fill="#cfc6c6"></path></svg>
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <!-- Color customizer end here -->
                              <hr class="hr-horizontal">
                              <div>
                                <h6 class="d-inline-block mb-3 me-2">Page Style </h6>
                                <div class="d-grid gap-3 grid-cols-2 mb-4">
                                  <div data-setting="radio">
                                    <input type="radio" value="container" class="btn-check" name="page_layout" id="page-layout-boxed">
                                    <label class="btn btn-border d-block" for="page-layout-boxed">Boxed</label>
                                  </div>
                                  <div data-setting="radio">
                                    <input type="radio" value="container-fluid" class="btn-check" name="page_layout" id="page-layout-full-width" checked="">
                                    <label class="btn btn-border d-block" for="page-layout-full-width">Full Width</label>
                                  </div>
                                </div>
                              </div>
                              <hr class="hr-horizontal">
                              <!-- Direction customizer start here -->
                              <div>
                                  <h5 class="mb-3 mt-4">Direction</h5>
                                  <div class=" mb-3" data-setting="radio">
                                      <div class="form-check mb-0 w-100">
                                          <input class="form-check-input custom-redio-btn" type="radio" value="ltr" name="theme_scheme_direction" data-prop="dir" id="theme-scheme-direction-ltr" checked="">
                                          <label class="form-check-label d-flex align-items-center justify-content-between" for="theme-scheme-direction-ltr">
                                             <span>LTR</span>
                                              <svg class="text-primary" width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <circle cx="11.5" cy="13.5002" r="6.5" fill="currentColor"></circle>
                                                  <rect x="21" y="7.70026" width="34" height="5" rx="2" fill="#80868B"></rect>
                                                  <rect opacity="0.5" x="21" y="16.1003" width="25.6281" height="3.2" rx="1.6" fill="#80868B"></rect>
                                                  <rect x="0.375" y="0.375244" width="59.25" height="26.25" rx="4.125" stroke="currentColor" stroke-width="0.75"></rect>
                                              </svg>
                                          </label>
                                      </div>
                                     
                                  </div>
                                   <div class="mb-3" data-setting="radio">
                                      <div class="form-check mb-0 w-100">
                                          <input class="form-check-input custom-redio-btn" type="radio" value="rtl" name="theme_scheme_direction" data-prop="dir" id="theme-scheme-direction-rtl">
                                          <label class="form-check-label d-flex align-items-center justify-content-between " for="theme-scheme-direction-rtl">
                                              <span>RTL</span>
                                              <svg class="text-primary" width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <circle r="6.5" transform="matrix(-1 0 0 1 48.5 13.5002)" fill="currentColor"></circle>
                                                  <rect width="34" height="5" rx="2" transform="matrix(-1 0 0 1 39 7.70026)" fill="#80868B"></rect>
                                                  <rect opacity="0.5" width="25.6281" height="3.2" rx="1.6" transform="matrix(-1 0 0 1 39 16.1003)" fill="#80868B"></rect>
                                                  <rect x="-0.375" y="0.375" width="59.25" height="26.25" rx="4.125" transform="matrix(-1 0 0 1 59.25 0.000244141)" stroke="currentColor" stroke-width="0.75"></rect>
                                              </svg>
                                          </label>
                                      </div>
                                      
                                  </div>
                              </div>
                              <!-- Direction customizer end here -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    <!-- Settings sidebar end here --> --}}
{{--     
    <a class="btn btn-fixed-end btn-warning btn-icon btn-setting" id="settingbutton" data-bs-toggle="offcanvas" data-bs-target="#live-customizer" role="button" aria-controls="live-customizer">
      <svg class="icon-24 animated-rotate" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8064 7.62361L20.184 6.54352C19.6574 5.6296 18.4905 5.31432 17.5753 5.83872V5.83872C17.1397 6.09534 16.6198 6.16815 16.1305 6.04109C15.6411 5.91402 15.2224 5.59752 14.9666 5.16137C14.8021 4.88415 14.7137 4.56839 14.7103 4.24604V4.24604C14.7251 3.72922 14.5302 3.2284 14.1698 2.85767C13.8094 2.48694 13.3143 2.27786 12.7973 2.27808H11.5433C11.0367 2.27807 10.5511 2.47991 10.1938 2.83895C9.83644 3.19798 9.63693 3.68459 9.63937 4.19112V4.19112C9.62435 5.23693 8.77224 6.07681 7.72632 6.0767C7.40397 6.07336 7.08821 5.98494 6.81099 5.82041V5.82041C5.89582 5.29601 4.72887 5.61129 4.20229 6.52522L3.5341 7.62361C3.00817 8.53639 3.31916 9.70261 4.22975 10.2323V10.2323C4.82166 10.574 5.18629 11.2056 5.18629 11.8891C5.18629 12.5725 4.82166 13.2041 4.22975 13.5458V13.5458C3.32031 14.0719 3.00898 15.2353 3.5341 16.1454V16.1454L4.16568 17.2346C4.4124 17.6798 4.82636 18.0083 5.31595 18.1474C5.80554 18.2866 6.3304 18.2249 6.77438 17.976V17.976C7.21084 17.7213 7.73094 17.6516 8.2191 17.7822C8.70725 17.9128 9.12299 18.233 9.37392 18.6717C9.53845 18.9489 9.62686 19.2646 9.63021 19.587V19.587C9.63021 20.6435 10.4867 21.5 11.5433 21.5H12.7973C13.8502 21.5001 14.7053 20.6491 14.7103 19.5962V19.5962C14.7079 19.088 14.9086 18.6 15.2679 18.2407C15.6272 17.8814 16.1152 17.6807 16.6233 17.6831C16.9449 17.6917 17.2594 17.7798 17.5387 17.9394V17.9394C18.4515 18.4653 19.6177 18.1544 20.1474 17.2438V17.2438L20.8064 16.1454C21.0615 15.7075 21.1315 15.186 21.001 14.6964C20.8704 14.2067 20.55 13.7894 20.1108 13.5367V13.5367C19.6715 13.284 19.3511 12.8666 19.2206 12.3769C19.09 11.8873 19.16 11.3658 19.4151 10.928C19.581 10.6383 19.8211 10.3982 20.1108 10.2323V10.2323C21.0159 9.70289 21.3262 8.54349 20.8064 7.63277V7.63277V7.62361Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          <circle cx="12.1747" cy="11.8891" r="2.63616" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
      </svg>
    </a> --}}
@endsection
