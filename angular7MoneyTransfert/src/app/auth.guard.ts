<<<<<<< HEAD
import { Injectable } from '@angular/core';
import {CanActivate, Router} from '@angular/router';
import { AuthService } from './auth.service';

@Injectable()
export class AuthGuard implements CanActivate {


     constructor(private router: Router, private authService: AuthService) { }


     canActivate() {
    if (localStorage.getItem('currentUser')) {
      // logged in so return true
      /* console.log( JSON.parse(localStorage.getItem('currentUser')).username ); */
      return true;
    }
    console.log(localStorage.getItem('currentUser'));
    // not logged in so redirect to login page
    this.router.navigate(['/login']);
    return false;
  }
}
=======
import { Injectable } from '@angular/core';
import {CanActivate, Router} from '@angular/router';
import { AuthService } from './auth.service';

@Injectable()
export class AuthGuard implements CanActivate {


     constructor(private router: Router, private authService: AuthService) { }


     canActivate() {
    if (localStorage.getItem('currentUser')) {
      // logged in so return true
      /* console.log( JSON.parse(localStorage.getItem('currentUser')).username ); */
      return true;
    }
    console.log(localStorage.getItem('currentUser'));
    // not logged in so redirect to login page
    this.router.navigate(['/login']);
    return false;
  }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
