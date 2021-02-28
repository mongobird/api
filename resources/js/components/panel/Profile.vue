<template>
  <div class="container">
        <div class="user-account">
            <img src="/assets/img/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
            <div class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Имя пользователя</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href=""><i class="icon-user"></i>Мой профиль</a></li>
                    <li><a href=""><i class="icon-envelope-open"></i>Сообщения</a></li>
                    <li><a href=""><i class="icon-settings"></i>Настройки</a></li>
                    <li class="divider"></li>
                    <li><a href=""><i class="icon-power"></i>Выход</a></li>
                </ul>
            </div>
            <hr>
            <ul class="row list-unstyled">
                <li class="col-4">
                    <small>Sales</small>
                    <h6>456</h6>
                </li>
                <li class="col-4">
                    <small>Order</small>
                    <h6>1350</h6>
                </li>
                <li class="col-4">
                    <small>Revenue</small>
                    <h6>$2.13B</h6>
                </li>
            </ul>
        </div>
</div>

</template>

<script>
export default {

}
</script>

<style>

</style>
