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
  errorMessage: string;

 constructor( private router: Router,
              private authenticationService: AuthService,private tokenStorage:TokenStorageService) {}

 ngOnInit() {
  if (this.tokenStorage.getToken()) {
    this.roles = this.tokenStorage.getAuthorities();
  }
 }


 login(e: { preventDefault: () => void; }) {
  let numberConnect=Number(localStorage.getItem('numberConnexion'));
   this.authenticationService.login(this.username, this.password)
     .subscribe(data=> {
     //alert(data)
     this.errorMessage=data
    
      if(numberConnect<1 && !this.errorMessage){
       
        this.router.navigate(['/passwordChange']);
      }
      else if(numberConnect>=1 && !this.errorMessage){
        //this.errorMessage=data
        this.router.navigate(['/home']);
      }
     }, err => err
     
     );
     //alert(this.errorMessage);
 }

 reloadPage() {
  window.location.reload();
}

}