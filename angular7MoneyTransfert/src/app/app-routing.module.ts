import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { PartenaireComponent } from './partenaire/partenaire.component';
import { UsersComponent } from './users/users.component';
import { CompteComponent } from './compte/compte.component';
import { AddPartenaireComponent } from './add-partenaire/add-partenaire.component';
import { AddUserComponent } from './add-user/add-user.component';

const routes: Routes = [
  { path: 'partenaires', component: PartenaireComponent},
  { path: 'utilisateurs', component: UsersComponent},
  { path: 'compte', component: CompteComponent},
  { path: 'addPartenaire', component: AddPartenaireComponent},
  { path: 'addUser', component: AddUserComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
