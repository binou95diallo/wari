import { Component, OnInit } from '@angular/core';
import { faCoffee } from '@fortawesome/free-solid-svg-icons';
import { AuthService } from './auth.service';
import { Route } from '@angular/compiler/src/core';
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
  router.navigate(['/home']);
}
  
ngOnInit():void{
this.authenticationService.getToken();
}
}
