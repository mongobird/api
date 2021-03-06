import Token from './Token'
import AppStorage from './AppStorage'
class User {

    login(data) {
          
        axios.post('/api/login',data) 
        .then(response =>  this.responseAfterlogin(response))
        .catch(error=> this.errors = (error.response.data))
        
        
        
 }

 responseAfterlogin(response){
    const access_token = response.data.token 
    const username = response.data.user 
    if(Token.isValid(access_token)){
    AppStorage.store(username,access_token) 
    }
}


hasToken(){
    const storedToken = AppStorage.getToken();
    if(storedToken){
    return Token.isValid(storedToken) ? true : false
    }

    return false

}

loggedIn() {
return this.hasToken()
}

logout(){
 AppStorage.clear()
}



name(){
    if (this.loggedIn()) {
     return AppStorage.getUser()
    }
    }

    id() {
    if(this.loggedIn()){
    const payload = Token.payload(AppStorage.getToken()) 
    return payload.sub
    }


}


}

export default User = new User();