import { Component, OnInit } from '@angular/core';
import { DataService } from '../data.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-depot',
  templateUrl: './depot.component.html',
  styleUrls: ['./depot.component.css']
})
export class DepotComponent implements OnInit {
  montant: string;
  constructor(private data: DataService, private router: Router) { }

  addDepot() {
    console.log(this.montant);
   this.data.depot(this.montant)
    .subscribe(
      res => {
        this.router.navigate(['/comptes'])
      },
      err => console.log(err)
    )   
    
  }

  ngOnInit() {
  }

}
