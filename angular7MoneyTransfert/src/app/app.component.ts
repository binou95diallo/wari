import { Component } from '@angular/core';
import { faCoffee } from '@fortawesome/free-solid-svg-icons';
import { AuthService } from './auth.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'angular7MoneyTransfert';
  faCoffee = faCoffee;
constructor(private authenticationService:AuthService){}
  isAdmin(){
    return this.authenticationService.isAdmin();
  }
  
  isUser(){
    return this.authenticationService.isUser();
  }
  isAuthenticated(){
    return this.authenticationService.isAuthenticated();
  }
}
