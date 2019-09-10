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
