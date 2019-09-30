<<<<<<< HEAD
import { Component, OnInit } from '@angular/core';
import { DataService } from '../data.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-password-change',
  templateUrl: './password-change.component.html',
  styleUrls: ['./password-change.component.css']
})
export class PasswordChangeComponent implements OnInit {
  hide = true;
password:string;
username:string;
userData={username:null};
  constructor(private data:DataService, private router:Router) { }

  ngOnInit() {
  }

  passwordChange(){
      this.userData.username=localStorage.getItem('currentUser');
       this.data.passwordChange(this.userData).subscribe(data=>
        {
          this.router.navigate(['/home'])
       },
       err => console.log(err))
  }

}
=======
import { Component, OnInit } from '@angular/core';
import { DataService } from '../data.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-password-change',
  templateUrl: './password-change.component.html',
  styleUrls: ['./password-change.component.css']
})
export class PasswordChangeComponent implements OnInit {
  hide = true;
password:string;
username:string;
userData={username:null};
  constructor(private data:DataService, private router:Router) { }

  ngOnInit() {
  }

  passwordChange(){
      this.userData.username=localStorage.getItem('currentUser');
       this.data.passwordChange(this.userData).subscribe(data=>
        {
          this.router.navigate(['/home'])
       },
       err => console.log(err))
  }

}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
