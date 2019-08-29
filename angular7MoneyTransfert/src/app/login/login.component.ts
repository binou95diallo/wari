import { Component, OnInit } from '@angular/core';
import {Router} from '@angular/router';
import {AuthService} from '../auth.service';
import { TokenStorageService } from '../token-storage.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  roles: string[] = [];
  username: string;
  password: string;
  error: string;

 constructor( private router: Router,
              private authenticationService: AuthService,private tokenStorage:TokenStorageService) {}

 ngOnInit() {
  if (this.tokenStorage.getToken()) {
    this.roles = this.tokenStorage.getAuthorities();
  }
 }


 login(e: { preventDefault: () => void; }) {

   this.authenticationService.login(this.username, this.password)
     .subscribe(data=> {
     /*  this.tokenStorage.saveAuthorities(data.Authorization);
      this.roles = this.tokenStorage.getAuthorities(); */
        //this.reloadPage();
       
       this.router.navigate(['/partenaires']);

     }, loginError => this.error = loginError.message + ' : verify  your username or password !  ');
 }

 reloadPage() {
  window.location.reload();
}

}