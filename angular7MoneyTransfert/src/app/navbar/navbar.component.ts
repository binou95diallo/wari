<<<<<<< HEAD
import { Component, OnInit } from '@angular/core';
import { AuthService } from '../auth.service';
import { faUser } from '@fortawesome/free-solid-svg-icons';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent implements OnInit {
  faUser=faUser;

  constructor(private authenticationService:AuthService){}
  isSuperAdmin(){
    return this.authenticationService.isSuperAdmin();
  }
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
  isSuperAdminOrAdminPartenaire(){
    return this.authenticationService.isSuperAdminOrPartenaire();
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
=======
import { Component, OnInit } from '@angular/core';
import { AuthService } from '../auth.service';
import { faUser } from '@fortawesome/free-solid-svg-icons';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent implements OnInit {
  faUser=faUser;

  constructor(private authenticationService:AuthService){}
  isSuperAdmin(){
    return this.authenticationService.isSuperAdmin();
  }
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
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
