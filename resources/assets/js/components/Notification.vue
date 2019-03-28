<template>
    <li class="dropdown notifications-menu" @click="markNotificationAsRead">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">{{unreadNotifications.length}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have {{unreadNotifications.length}} new notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li v-for="unread in unreadNotifications"  >
                  <a href="#">
                  <i class="fa fa-users text-aqua"></i> {{unread.data['data']}}
                  </a>
                  </li>
                
                  
                </ul>
              </li>
              <li class="footer"><a href="/my-admin/notification">View all</a></li>
            </ul>
          </li>
</template>

<script>
    export default {
        props: ['unreads','userid'],
        data(){

          return{
            unreadNotifications: this.unreads
            }

        },
        methods:{
            markNotificationAsRead(){
              axios.get('/my-admin/markAsRead');
            }
        },
        mounted() {
            console.log('Component mounted.');
            Echo.private('App.User.' + this.userid)
            .notification((notification) => {
            console.log(notification);
            let newUnreadNotifications={data:{thread:notification.thread,user:notification.user}};
            this.unreadNotifications.push(newUnreadNotifications);
    });
        }
    }
</script>
