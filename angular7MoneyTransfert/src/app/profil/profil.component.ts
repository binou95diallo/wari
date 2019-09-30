<<<<<<< HEAD
import { Component, OnInit } from '@angular/core';
import { DataService } from '../data.service';

@Component({
  selector: 'app-profil',
  templateUrl: './profil.component.html',
  styleUrls: ['./profil.component.css']
})
export class ProfilComponent implements OnInit {

  user:{};
  constructor(private data:DataService) { }

  ngOnInit() {
    this.findUser();
  }

  findUser(){
    this.data.findUser().subscribe(data=>{
      this.user=data
      console.log(data)
    })

  }

}
=======
import { Component, OnInit } from '@angular/core';
import { DataService } from '../data.service';

@Component({
  selector: 'app-profil',
  templateUrl: './profil.component.html',
  styleUrls: ['./profil.component.css']
})
export class ProfilComponent implements OnInit {

  user:{};
  constructor(private data:DataService) { }

  ngOnInit() {
    this.findUser();
  }

  findUser(){
    this.data.findUser().subscribe(data=>{
      this.user=data
      console.log(data)
    })

  }

}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
