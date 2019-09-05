import { Component, OnInit } from '@angular/core';
import { faCoffee } from '@fortawesome/free-solid-svg-icons';
import { AuthService } from './auth.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent  implements OnInit{
  title = 'angular7MoneyTransfert';
  faCoffee = faCoffee;
constructor(private authenticationService:AuthService, router: Router){
  //router.navigate(['/home']);
}
  
ngOnInit():void{
this.authenticationService.getToken();
}

isSuperAdmin(){
  return this.authenticationService.isAdmin();
}
isUserPart(){
  return this.authenticationService.isUserPart();
}

isCaissier(){
  return this.authenticationService.isCaissier();
}

isPartenaire(){
  return this.authenticationService.isAdminPartenaire();
}
isPartenaireOrUser(){
  return this.authenticationService.isPartenaireOrUser();
}
isAdminPartenaireOrCaissier(){
  return this.authenticationService.isAdminPartenaireOrCaissier();
}

isAdminPartenaire(){
  return this.authenticationService.isAdminPartenaire();
}
isAuthenticated(){
  return this.authenticationService.isAuthenticated();
}
isAdmin(){
  return this.authenticationService.isAdmin();
}

}
