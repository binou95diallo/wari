import { Component, OnInit } from '@angular/core';
import { AuthService } from '../auth.service';


@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent implements OnInit {

  constructor(private authenticationService:AuthService){}
  isAdmin(){
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
  /* logout(){

    this.authenticationService.logout();
  } */
  ngOnInit() {
  }

}
