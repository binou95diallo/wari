import { Injectable,Injector } from '@angular/core';
import { HttpInterceptor, HttpHandler, HttpRequest } from '@angular/common/http';
import {AuthService} from './auth.service';

@Injectable()
export class AuthInterceptor implements HttpInterceptor {

    constructor(private injector:Injector) { }
    
    intercept(request: HttpRequest<any>, next: HttpHandler) {
        let authService = this.injector.get(AuthService)
        console.log(authService.getToken());
        let tokenizedReq=request.clone(
       {
        setHeaders: {
            'Authorization': `Bearer ${authService.getToken()}`
        }
       })
       return next.handle(tokenizedReq);
    }
}
