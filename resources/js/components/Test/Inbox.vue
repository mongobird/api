<template>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                 <bread-crumb></bread-crumb>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="mobile-left">
                            <a class="btn btn-primary toggle-email-nav collapsed" href="javascript:void(0);" role="button"  v-on:click="menuToggle = !menuToggle">
                                <span class="btn-label">
                                    <i class="la la-bars"></i>
                                </span>
                                Menu
                            </a>
                        </div>
                        <div class="mail-inbox">
                            <div class="mail-left collapse" id="email-nav"  v-bind:class="{ show: menuToggle }">
                                <div class="mail-compose m-b-20">
                                    <router-link to="app-inbox/compose" class="btn btn-danger btn-block">Compose</router-link>
                                    <!-- <router-view></router-view> -->
                                </div>
                                <div class="mail-side">
                                    <ul class="nav">
                                        <li class="active"><a href="javascript:void(0);"><i class="icon-envelope"></i>Inbox<span class="badge badge-primary float-right">6</span></a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-cursor"></i>Sent</a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-envelope-open"></i>Draft<span class="badge badge-info float-right">3</span></a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-action-redo"></i>Outbox</a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-star"></i>Starred<span class="badge badge-warning float-right">6</span></a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-trash"></i>Trash<span class="badge badge-danger float-right">9</span></a></li>
                                    </ul>
                                    <h3 class="label">Labels <a href="#" class="float-right m-r-10" title="Add New Labels"><i class="icon-plus"></i></a></h3>
                                    <ul class="nav">
                                        <li class="active">
                                            <a href="javascript:void(0);"><i class="fa fa-circle text-danger"></i>Web Design<span class="badge badge-primary float-right">5</span></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa fa-circle text-info"></i>Recharge</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa fa-circle text-dark"></i>Paypal</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa fa-circle text-primary"></i>Family</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mail-right">
                 
                                <div class="mail-list">
                                    <ul class="list-unstyled">
                                        <li class="clearfix">
                               
                                            <div class="mail-detail-right">
                                                <h6 class="sub"><a href="javascript:void(0);" class="mail-detail-expand">Herman Beck</a> <span class="badge badge-default mb-0">Marketing</span></h6>
                                                <p class="dep"><span class="m-r-10">[ThemeForest]</span>Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry.</p>
                                                <span class="time">23 Jun</span>
                                            </div>
                                            <div class="hover-action">
                                                <a class="btn btn-warning mr-2" href="javascript:void(0);"><i class="fa fa-archive"></i></a>
                                                <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </div>
                                        </li>
                                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</template>
<script>

export default {
    name: 'InboxComponent',
    components: {
      
    },
    methods:{
        tagOutside: function() {
            this.tagDropdawn = false
        },
        moreOutside: function() {
            this.moreDropdawn = false
        },
    },data(){
        return{
            tagDropdawn:false,
            moreDropdawn:false,
            menuToggle:false
        }
    },directives: {
        'click-outside': {
            bind: function(el, binding) {
                // Define Handler and cache it on the element
                const bubble = binding.modifiers.bubble
                const handler = (e) => {
                if (bubble || (!el.contains(e.target) && el !== e.target)) {
                    binding.value(e)
                }
                }
                el.__vueClickOutside__ = handler

                // add Event Listeners
                document.addEventListener('click', handler)
            },
        }
    }
}
</script>
<style scoped>

</style>