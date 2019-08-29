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
  
  isUser(){
    return this.authenticationService.isUser();
  }

  isCaissier(){
    return this.authenticationService.isCaissier();
  }
  
  isAuthenticated(){
    return this.authenticationService.isAuthenticated();
  }

  ngOnInit() {
  }

}
